<?php

namespace Ahe\gsbBundle\Controller;
require_once("include/fct.inc.php");
//require_once("include/class.pdogsb.inc.php");
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use PdoGsb;
use Symfony\Component\HttpFoundation\Request;



class FraisVisiteursController extends Controller
{   
    public function consulterFraisAction()
    {
        $session = $this->getRequest()->getSession() ;
        $idVisiteur = $session->get('id') ;
        // Récupérer l'entité avec Doctrine - 
        // $repository contiendra tous les enregistrements de la table FicheFrais
        $repository = $this->getDoctrine()->getManager()
                           ->getRepository('AheGsbBundle:FicheFrais') ;
             
        // Fonction définie dans VisiteurRepository.php
        $listeMois = $repository->getLesMoisDisponibles($idVisiteur) ;
        if ($listeMois === null) { // Il n'y a aucun enregistrement 
            $this->get('session')->getFlashBag()
                    ->add('Warning','Aucune fiche de frais à consulter') ;
            return render('AheGsbBundle:Visiteurs:accueilVisiteur.html.twig');
        }
        else {  // Il y a au moins une fiche de frais
            if ($this->getRequest()->getMethod() == 'POST') {
                // Traitement du formulaire 
                //$pdo = PdoGsb::getPdoGsb();
                
                //frais forfaitisés
                $request = $this->get('request');
                $session = $request->getSession() ;
                $idVisiteur = $session->get('id') ;
                $leMois = $request->get('lastMois') ;
                $lesFraisForfait = $this->getLesFraisForfait($idVisiteur,$leMois) ;

                //frais hors forfait
                $connexion = $this->getDoctrine()->getConnection();
                $query = "SELECT * FROM LigneFraisHorsForfait where mois = ? and idVisiteur = ?";
                $stmt = $connexion->prepare($query);
                $stmt->execute(array($leMois, $idVisiteur));
                $result = $stmt->fetchAll();
                $numAnnee = substr($leMois, 0, 4);
                $numMois = substr($leMois, 4, 2);
                $session->set('leMois', $numMois);
                return $this->render('AheGsbBundle:Visiteurs:consultationFrais.html.twig', 
                        array('leMois' => $leMois, 'lesFraisForfait' => $lesFraisForfait,
                            'numAnnee' => $numAnnee, 'numMois' => $numMois, 'fraishf' => $result));
                
            }
            return $this->render('AheGsbBundle:Visiteurs:selectFraisMois.html.twig',
                    array('listeMois'=>$listeMois)) ;
        }
            
    } 
    
    public function getLesFraisForfait($idVisiteur, $leMois){
        
		$req = "select FraisForfait.id as idFrais, FraisForfait.libelle as libelle, 
		LigneFraisForfait.quantite as quantite from LigneFraisForfait inner join FraisForfait 
		on FraisForfait.id = LigneFraisForfait.idFraisForfait
		where LigneFraisForfait.idVisiteur = ? and LigneFraisForfait.mois= ?
		order by LigneFraisForfait.idFraisForfait";
                
                $connexion = $this->getDoctrine()->getConnection();
                $statement = $connexion->prepare($req);
                $statement->execute(array($idVisiteur,$leMois));
                $resultat = $statement->fetchAll();
       
		return $resultat; 
    }
    
//    public function getLesFraisHorsForfait($idVisiteur, $leMois){
//        
//                $query = "select * from LigneFraisHorsForfait where mois = ? and idVisiteur = ?";
//                $connexion = $this->getDoctrine()->getConnection();
//                $statement = $connexion->prepare($query);
//                $statement->execute(array($idVisiteur,$leMois));
//                $resultat2 = $statement->fetchAll();
//                return $resultat2;
//                
//    }

    public function saisirFraisHorsForfaitAction(){
        
        $session = $this->get('request')->getSession();
        $idVisiteur = $session->get('id');
        $mois = getMois(date("d/m/Y"));
        $numAnnee = substr($mois, 0, 4);
        $numMois = substr($mois, 4, 2);
        
        $form = $this->createFormBuilder()
                ->add('libelle', 'text', array('label' => 'Libellé : '))
                ->add('date', 'date', array('label' => 'Date : '))
                ->add('montant', 'number', array('label' => 'Montant :'))
                ->add('Valider', 'submit')
                ->add('Annuler', 'reset')
                ->getForm();
        
        $request = $this->get('request');
        $lesErreursForfait = array();
        
        if($this->get('request')->getMethod() == 'POST'){
            
            $lesFrais = $request->request->get('lesFrais');
            if(lesQteFraisValides($lesFrais)){
                
                $libelle = $form['libelle']->getData();
                $date = $form['date']->getData();
                $montant = $form['montant']->getData();
                $this->creerNouveauFraisHorsForfait($idVisiteur, $mois, $libelle, $date, $montant);
                return $this->redirect($this->generateUrl('gsb_homepage_visiteurs'));
            }
            else{
                $lesErreursForfait[]="Les valeurs des frais doivent être 
                    numériques";
            }
            return $this->render('AheGsbBundle:Visiteurs:accueilVisiteur.html.twig');
         }
        //$lesFraisHorsForfait = $this->getLesFraisHorsForfait($idVisiteur,$mois);
         
         
         
        $connexion = $this->getDoctrine()->getConnection();
        $query = "select * from LigneFraisHorsForfait where mois = ? and idVisiteur= ?";
        $stmt = $connexion->prepare($query);
        $stmt->execute(array($idVisiteur,$mois));
        $result = $stmt->fetch();
        return $this->render('AheGsbBundle:Visiteurs:saisieFraisHorsForfait.html.twig', array('date' => $result['date'],
                   'num'=>$result['idVIsiteur'],'libelle'=>$result['libelle'],'montant'=>$result['montant']
                    ));

        
    }
    public function saisirFraisForfaitAction() 
    {
        $session = $this->get('request')->getSession();
        $idVisiteur = $session->get('id');
        $mois = getMois(date("d/m/Y"));
        $numAnnee = substr($mois, 0, 4);
        $numMois = substr($mois, 4, 2);
//        if ($this->estPremierFraisMois($idVisiteur, $mois)) {
//            $this->creerNouvellesLignesFrais($idVisiteur, $mois);
//        }
        
        $form = $this->createFormBuilder()
                ->add('libelle', 'text', array('label' => 'Libellé : '))
                ->add('date', 'date', array('label' => 'Date : '))
                ->add('montant', 'number', array('label' => 'Montant :'))
                ->add('Valider', 'submit')
                ->add('Annuler', 'reset')
                ->getForm();
        
        $request = $this->get('request');
        $lesErreursForfait = array();
        
        if($this->get('request')->getMethod() == 'POST'){
            $lesFrais = $request->request->get('lesFrais');
            if(lesQteFraisValides($lesFrais)){
                
                $libelle = $form['libelle']->getData();
                $date = $form['date']->getData();
                $montant = $form['montant']->getData();
                $this->creerNouveauFraisForfait($idVisiteur, $mois, $libelle, $date, $montant);
                return $this->redirect($this->generateUrl('gsb_homepage_visiteurs'));
            }
            else{
                $lesErreursForfait[]="Les valeurs des frais doivent être 
                    numériques";
            }
            return $this->render('AheGsbBundle:Visiteurs:accueilVisiteur.html.twig');
         }
         $lesFraisForfait = $this->getLesFraisForfait($idVisiteur,$mois);
         
        return $this->render('AheGsbBundle:Visiteurs:saisieFraisForfait.html.twig',
                array('lesFraisForfait'=>$lesFraisForfait,
                    'nom'=>$session->get('nom'),'prenom'=>$session->get('prenom'),
                    'numMois'=>$numMois,
                    'numAnnee'=>$numAnnee,'lesErreursForfait'=> $lesErreursForfait));
     }

     
     public function creerNouveauFraisForfait($idVisiteur,$mois,$libelle,$date,$montant){
         
		//$dateFr = dateFrancaisVersAnglais($date);
                $c = $this->getDoctrine()->getConnection();
		$query = "insert into LigneFraisForfait values(?,?,?,?,?)";
                $stmt = $c->prepare($query);
                $stmt->execute(array($idVisiteur, $mois, $libelle, $date,$montant));
//		values('','$idVisiteur','$mois','$libelle','$dateFr','$montant')";

                
              
    }
     
    public function creerNouveauFraisHorsForfait($idVisiteur,$mois,$libelle,$date,$montant){
        
        $connexion = $this->getDoctrine()->getConnection();
        $query = "insert into LigneFraisHorsForfait values(?,?,?,?,?,?)";
        $stmt = $connexion->prepare($query);
        $stmt->execute(array('', $idVisiteur, $mois, $libelle, $date->format('Y-m-d'), $montant));
        
    }
    
    
    
 
     public function estPremierFraisMois($idVisiteur, $mois) {
         
        $connexion = $this->getDoctrine()->getConnection();
        
        $ok = false;
        $req = "select count(*) as nbLignesFrais from FicheFrais 
		where FicheFrais.mois = ? and FicheFrais.idVisiteur = ? ";
       
        $stmt = $connexion->prepare($req);
        $stmt->execute(array($mois, $idVisiteur));
        $laLigne = $stmt->fetch();
        
        if ($laLigne['nbLignesFrais'] == 0) {
            
            $ok = true;
            
        }
        
        return $ok;
        
    }
    
    public function creerNouvellesLignesFrais($idVisiteur,$mois){
        
	$dernierMois = $this->dernierMoisSaisi($idVisiteur);
        $object = $this->getLesInfosFicheFrais($idVisiteur, $dernierMois);
        if ($object->getIdetat() == 'CR') {
            $this->majEtatFicheFrais($object, 'CL');
        }
        $ficheFrais = new \Ahe\gsbBundle\Entity\FicheFrais();
        $ficheFrais->setIdvisiteur($this->getVisiteur($idVisiteur))
                ->setIdetat($this->getEtat('CR'))
                ->setDatemodif(new \DateTime())
                ->setMois($mois)
                ->setMontantvalide(0)
                ->setNbjustificatifs(0);
        $em = $this->getDoctrine()->getManager();
        $em->persist($ficheFrais);
        $em->flush();

        $lesIdFrais = $this->getLesIdFrais();
        foreach ($lesIdFrais as $uneLigneIdFrais) {
            $unIdFrais = $uneLigneIdFrais->getId();

            $req = "insert into LigneFraisForfait(idVisiteur,mois,
                                            idFraisForfait,quantite) 
                                values(?,?,?,0)";
            $co = $this->getDoctrine()->getConnection();
            $stmt = $co->prepare($req);
            $stmt->execute(array($idVisiteur, $mois, $unIdFrais));
            
        }
        
    }
    
    public function dernierMoisSaisi($idVisiteur){
        
	$connexion = $this->getDoctrine()->getConnection();
        $req = "select max(mois) as dernierMois from FicheFrais where FicheFrais.idVisiteur = ? ";
        $res = $connexion->prepare($req);
        $res->execute(array($idVisiteur));
        $laLigne = $res->fetch();
        $dernierMois = $laLigne['dernierMois'];
        return $dernierMois;
        
    }
    
    public function getLesInfosFicheFrais($idVisiteur, $mois) {
        
        $repository = $this->getDoctrine()->getManager()->getRepository('AheGsbBundle:FicheFrais');
        $result = $repository->findOneBy(array('idvisiteur' => $idVisiteur, 'mois' => $mois));
        return $result;
        
    }
    
    private function getVisiteur($idVisiteur) {
        
        $repository = $this->getDoctrine()->getManager()->getRepository('AheGsbBundle:Visiteur');
        $result = $repository->findOneBy(array('id' => $idVisiteur));
        return $result;
        
    }
    
    private function getEtat($idEtat) {
        
        $repository = $this->getDoctrine()->getManager()->getRepository('AheGsbBundle:Etat');
        $result = $repository->findOneBy(array('id' => $idEtat));
        return $result;
        
    }
    
    public function getLesIdFrais() {
        
        $repository = $this->getDoctrine()->getManager()->getRepository('AheGsbBundle:FraisForfait');
        $result = $repository->findAll();
        return $result;
        
    }
    
     public function accueilVisiteursAction() {
         return $this->render('AheGsbBundle:Visiteurs:accueilVisiteur.html.twig');
     }
     
    
    
    public function modfhfAction($id) {
        
        $connexion = $this->getDoctrine()->getConnection();
        $query = "select * from LigneFraisHorsForfait where id = ?";
        $stmt = $connexion->prepare($query);
        $stmt->execute(array($id));
        $result = $stmt->fetch();
        
        return $this->render('AheGsbBundle:Visiteurs:modfhf.html.twig', array('date' => $result['date'],
                   'num'=>$result['id'],'libelle'=>$result['libelle'],'montant'=>$result['montant']
                    ));
        
    }
     
    
    public function majfhfAction() {
        
        $request = $this->get('request');
        
         if ($this->get('request')->getMethod() == 'POST') {
             
                $connexion = $this->getDoctrine()->getConnection();
                $libelle = $request->request->get('libelle');
                $date = $request->request->get('date');
                $montant = $request->request->get('montant');
                $id = $request->request->get('idfhf');
                
                $query = "UPDATE LigneFraisHorsForfait set libelle =  ? , date = ? , montant = ? where id = ?";
                $stmt = $connexion->prepare($query);
                $stmt->execute(array($libelle,$date,$montant,$id));
                
                return $this->redirect($this->generateUrl('gsb_consultation_frais'));
                
      }
    }
}

?>