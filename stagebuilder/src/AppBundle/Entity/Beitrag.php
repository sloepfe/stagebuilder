<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
}
