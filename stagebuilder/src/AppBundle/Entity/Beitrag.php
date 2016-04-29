<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity
 * @ORM\Table(name="beitraege")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\BeitragRepository")
 */
class Beitrag {
/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Projekt", inversedBy="articles")
     * @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     */
    private $project;
    
    
     /**
     * @ORM\Column(type="string", length=100)
     */
    private $titel;
   
     /**
     * @ORM\Column(type="string", length=100)
     */
    private $ersteller;
    
    /**
     *@ORM\Column(type="integer")
     */
    private $reihenfolge;
    
    /**
     *@ORM\Column(type="string", length=100)
     * 
     */
    private $dauer;
    
    /**
     *@ORM\Column(type="string", length=100)
     * 
     */
    private $startzeit;
    
    /**
     *@ORM\Column(type="string", length=100)
     * 
     */
    private $lied;
    
    /**
     * @ORM\Column(type="text")
     */
    private $materialliste;
    
    
    
    
    
    
    /**
     * @ORM\Column(type="string", length=100)
     *
     * @Assert\NotBlank(message="Please, upload the Frontimage as a jpg file.")
     * @Assert\File(mimeTypes={ "image/jpeg" })
     */
    private $frontpic;
    
    
/**
     * Get brochure
     *
     * @return string
     */
    public function getFrontpic()
    {
        return $this->frontpic;
    }

    public function setFrontpic($frontpic)
    {
        $this->frontpic = $frontpic;

        return $this;
    }
    
    
    /**
     * @ORM\Column(type="string", length=100)
     *
     * @Assert\NotBlank(message="Please, upload the Leftsideimage as a jpg file.")
     * @Assert\File(mimeTypes={ "image/jpeg" })
     */
    private $leftsidepic;
    
    
/**
     * Get brochure
     *
     * @return string
     */
    public function getLeftsidepic()
    {
        return $this->leftsidepic;
    }

    public function setLeftsidepic($leftsidepic)
    {
        $this->leftsidepic = $leftsidepic;

        return $this;
    }
    
     /**
     * @ORM\Column(type="string", length=100)
     *
     * @Assert\NotBlank(message="Please, upload the Rightsideimage as a jpg file.")
     * @Assert\File(mimeTypes={ "image/jpeg" })
     */
    private $rightsidepic;
    
    
/**
     * Get brochure
     *
     * @return string
     */
    public function getRightsidepic()
    {
        return $this->rightsidepic;
    }

    public function setRightsidepic($rightsidepic)
    {
        $this->rightsidepic = $rightsidepic;

        return $this;
    }
    
    
    
    
    
    
    
    
    
    
    
    

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titel
     *
     * @param string $titel
     *
     * @return Beitrag
     */
    public function setTitel($titel)
    {
        $this->titel = $titel;

        return $this;
    }

    /**
     * Get titel
     *
     * @return string
     */
    public function getTitel()
    {
        return $this->titel;
    }

    /**
     * Set ersteller
     *
     * @param string $ersteller
     *
     * @return Beitrag
     */
    public function setErsteller($ersteller)
    {
        $this->ersteller = $ersteller;

        return $this;
    }

    /**
     * Get ersteller
     *
     * @return string
     */
    public function getErsteller()
    {
        return $this->ersteller;
    }

    /**
     * Set reihenfolge
     *
     * @param integer $reihenfolge
     *
     * @return Beitrag
     */
    public function setReihenfolge($reihenfolge)
    {
        $this->reihenfolge = $reihenfolge;

        return $this;
    }

    /**
     * Get reihenfolge
     *
     * @return integer
     */
    public function getReihenfolge()
    {
        return $this->reihenfolge;
    }

    /**
     * Set dauer
     *
     * @param string $dauer
     *
     * @return Beitrag
     */
    public function setDauer($dauer)
    {
        $this->dauer = $dauer;

        return $this;
    }

    /**
     * Get dauer
     *
     * @return string
     */
    public function getDauer()
    {
        return $this->dauer;
    }

    /**
     * Set startzeit
     *
     * @param string $startzeit
     *
     * @return Beitrag
     */
    public function setStartzeit($startzeit)
    {
        $this->startzeit = $startzeit;

        return $this;
    }

    /**
     * Get startzeit
     *
     * @return string
     */
    public function getStartzeit()
    {
        return $this->startzeit;
    }

    /**
     * Set lied
     *
     * @param string $lied
     *
     * @return Beitrag
     */
    public function setLied($lied)
    {
        $this->lied = $lied;

        return $this;
    }

    /**
     * Get lied
     *
     * @return string
     */
    public function getLied()
    {
        return $this->lied;
    }

    /**
     * Set materialliste
     *
     * @param string $materialliste
     *
     * @return Beitrag
     */
    public function setMaterialliste($materialliste)
    {
        $this->materialliste = $materialliste;

        return $this;
    }

    /**
     * Get materialliste
     *
     * @return string
     */
    public function getMaterialliste()
    {
        return $this->materialliste;
    }

    /**
     * Set project
     *
     * @param \AppBundle\Entity\Projekt $project
     *
     * @return Beitrag
     */
    public function setProject(\AppBundle\Entity\Projekt $project = null)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \AppBundle\Entity\Projekt
     */
    public function getProject()
    {
        return $this->project;
    }
}
