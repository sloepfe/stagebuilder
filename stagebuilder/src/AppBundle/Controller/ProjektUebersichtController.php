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
     * @Route("/", name="homepage")
     */
    
     public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('homepage/projektUebersicht.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
        
        
        
    }
}
