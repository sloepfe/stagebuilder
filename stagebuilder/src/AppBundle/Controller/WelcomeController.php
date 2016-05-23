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
 * Startseite der Applikation
 * Begrüssung sowie Erklärung
 *
 * @author sloepfe
 */
class WelcomeController extends Controller{
    /**
     * @Route("/", name="welcome")
     */
    
    public function WelcomeAction(Request $request){
        
        return $this->render('welcome/welcome.html.twig');
    }
    }

