<?php
namespace Ahe\gsbBundle\Controller;
require_once("include/fct.inc.php");
//require_once("include/class.pdogsb.inc.php");
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use PdoGsb;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of ComptableController
 *
 * @author Nicolas J.
 */
class ComptableController extends Controller {
    
    
  public function listeVisiteursAccueilComptableAction() {
      
        $listeVisiteur = $this->getVisiteurs();
        return $this->render('AheGsbBundle:Comptable:accueilComptable.html.twig', array('listeVisiteur' => $listeVisiteur));
           
    }
    
    public function listeFraisVisAction($idVis) {
       
        //$listeFraisVis = $this->vueFrais();
        
        $pdo = $this->container->get('db1');
        
        $req = $pdo->query("select "
                . "LigneFraisForfait.idFraisForfait, "
                . "LigneFraisForfait.mois, "
                . "LigneFraisForfait.quantite "
                . "from Visiteur, LigneFraisForfait "
                . "where Visiteur.id = LigneFraisForfait.idVisiteur and Visiteur.id = '$idVis';");
        
        $listeFraisVis = $req->fetchAll();
        echo("$idVis");
        //return $listeFraisVis;
        return $this->render('AheGsbBundle:Comptable:fraisVisComptable.html.twig', array('listeFraisVis' => $listeFraisVis));
        
    }

    public function getVisiteurs() {
        
        $pdo = $this->container->get('db1');
        
        $req = $pdo->query("select Visiteur.id, "
                . "Visiteur.nom, "
                . "Visiteur.prenom, "
                . "Visiteur.adresse, "
                . "Visiteur.cp, "
                . "Visiteur.ville, "
                . "Visiteur.dateEmbauche "
                . "from Visiteur, Comptable "
                . "where Visiteur.idComptable = Comptable.id "
                . "and Visiteur.idComptable = '" . $session = $this->getRequest()->getSession()->get('id') . "';");
        
        $listeVisiteur = $req->fetchAll();
        
        return $listeVisiteur;
        
    }
    
    public function vueFrais(){
        
        $idVis->getRequest()->get('idVis');
        $pdo = $this->container->get('db1');
        
        $req = $pdo->query("select "
                . "LigneFraisForfait.idFraisForfait, "
                . "LigneFraisForfait.mois, "
                . "LigneFraisForfait.quantite "
                . "from Visiteur, LigneFraisForfait "
                . "where Visiteur.id = LigneFraisForfait.idVisiteur and Visiteur.id = '$idVis';");
        
        $listeFraisVis = $req->fetchAll();
        
        return $listeFraisVis;
        
    }
    
}

?>
