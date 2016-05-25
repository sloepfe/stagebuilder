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
     *
     * @ORM\OneToMany(targetEntity="Beitrag", mappedBy="project")
     */
    //private $articles;
    
    
    /*public function __construct() {
        $this->articles = new ArrayCollection();
    } 
     */
    
    
    
    
    
    /**
     * @ORM\Column(type="string", length=100)
     *
     * @Assert\NotBlank(message="Please, upload the image brochure as a jpg file.")
     * @Assert\File(mimeTypes={ "image/jpeg" })
     */
    private $brochure;
    
    
/**
     * Get brochure
     *
     * @return string
     */
    public function getBrochure()
    {
        return $this->brochure;
    }

    public function setBrochure($brochure)
    {
        $this->brochure = $brochure;

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

    /**
     * Add article
     *
     * @param \AppBundle\Entity\Beitrag $article
     *
     * @return Projekt
     */
    public function addArticle(\AppBundle\Entity\Beitrag $article)
    {
        $this->articles[] = $article;

        return $this;
    }

    /**
     * Remove article
     *
     * @param \AppBundle\Entity\Beitrag $article
     */
    public function removeArticle(\AppBundle\Entity\Beitrag $article)
    {
        $this->articles->removeElement($article);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticles()
    {
        return $this->articles;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->articles = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
