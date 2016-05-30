<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Projekt;

/**
 * Description of ProjektUebersichtController
 *
 * @author sloepfe
 */
class ProjektUebersichtController extends Controller{
    /**
     * @Route("/projektUebersicht", name="projekt_uebersicht")
     */
    
     public function ProjektUebersichtAction(Request $request)
    {
        

         $projekte = $this->getDoctrine()
        ->getRepository('AppBundle:Projekt')
        ->findAll();
         
        // replace this example code with whatever you need
        return $this->render('homepage/projektUebersicht.html.twig', array('projekte' => $projekte));
        
        
        
    }
    /**
     * @Route("/project_remove/{projektNr}", name="project_remove")
     */
    public function DeleteProjectAction( Projekt $projektNr){
    $em = $this->getDoctrine()->getManager();
    $em->remove($projektNr);
    $em->flush();
    
    $projekte = $this->getDoctrine()
        ->getRepository('AppBundle:Projekt')
        ->findAll();
    return $this->render('homepage/projektUebersicht.html.twig', array('projekte' => $projekte));
}
}