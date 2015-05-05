<?php

namespace Ahe\gsbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneFraisForfait
 *
 * @ORM\Table(name="LigneFraisForfait", indexes={@ORM\Index(name="idVisiteur", columns={"idvisiteur", "mois"})})
 * @ORM\Entity(repositoryClass="Ahe\gsbBundle\Entity\LigneFraisForfaitRepository")
 */
class LigneFraisForfait
{

    
   /** @ORM\ManyToOne(targetEntity="FicheFrais")
    * @ORM\Id
     * @var string
     * @ORM\Column(name="idFraisForfait", type="string", length=3, nullable=false)
     */
    private $idFraisForfait;
    
    
    
    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;

    
    /** @ORM\ManyToOne(targetEntity="FicheFrais")
     * @ORM\Id
     * @var string 
     * @ORM\Column(name="mois", type="string", length=6, nullable=false)
     */
    private $mois;

    /**
     * @var \FicheFrais
     *
     * @ORM\ManyToOne(targetEntity="FicheFrais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idVisiteur", referencedColumnName="idvisiteur"),
     *   @ORM\JoinColumn(name="mois", referencedColumnName="mois")
     * })
     */
    private $idVisiteur;


    /**
     * Set idVisiteur
     *
     * @param \Ahe\gsbBundle\Entity\FicheFrais $idVisiteur
     * @return LigneFraisHorsForfait
     */
    public function setIdVisiteur(\Ahe\gsbBundle\Entity\FicheFrais $idVisiteur = null)
    {
        $this->idVisiteur = $idVisiteur;
    }

    /**
     * Get idVisiteur
     *
     * @return \Ahe\gsbBundle\Entity\FicheFrais 
     */
    public function getIdVisiteur()
    {
        return $this->idVisiteur;
    }
    
    public function getIdFraisForfait() {
       return  $this->idFraisForfait;
        
    }
    
    public function getQuantite(){
        return $this->quantite;
    }
    
    public function getMois() {
        return $this->mois;
        
    }

    /**
     * Set idFraisForfait
     *
     * @param string $idFraisForfait
     * @return LigneFraisForfait
     */
    public function setIdFraisForfait($idFraisForfait)
    {
        $this->idFraisForfait = $idFraisForfait;

        return $this;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return LigneFraisForfait
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Set mois
     *
     * @param string $mois
     * @return LigneFraisForfait
     */
    public function setMois($mois)
    {
        $this->mois = $mois;

        return $this;
    }
}
