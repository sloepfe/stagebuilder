<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\SecurityContext;
/**
 * Description of NeuesProjektController
 *
 * @author sloepfe
 */
class NeuesProjektController extends Controller{
    
    /**
     * @Route("/neuesProjekt", name="neues_Projekt")
     */
    
    public function NeuesProjektAction()
    {
        return $this -> render('neuesProjekt/neuesProjekt.html.twig');
        
    }
    
    
}
