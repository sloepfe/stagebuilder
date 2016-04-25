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
 * @ORM\Table(name="projekte")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ProjektRepository")
 */
class Projekt {
    
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
     *@ORM\Column(type="string", length=100)
     * 
     */
    private $datum;
    
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
     * @return Projekt
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
     * @return Projekt
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
     * Set datum
     *
     * @param \DateTime $datum
     *
     * @return Projekt
     */
    public function setDatum($datum)
    {
        $this->datum = $datum;

        return $this;
    }

    /**
     * Get datum
     *
     * @return \DateTime
     */
    public function getDatum()
    {
        return $this->datum;
    }
}
