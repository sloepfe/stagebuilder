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

/**
 * Description of ProjektUebersichtController
 *
 * @author sloepfe
 */
class ProjektUebersichtController extends Controller{
    /**
     * @Route("/projekt_uebersicht", name="projektUbebersicht")
     */
    
     public function ProjektUebersichtAction(Request $request)
    {
        

         $projekte = $this->getDoctrine()
        ->getRepository('AppBundle:Projekt')
        ->findAll();
         
        // replace this example code with whatever you need
        return $this->render('homepage/projektUebersicht.html.twig', array('projekte' => $projekte));
        
        
        
    }
}
