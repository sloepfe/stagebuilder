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
 * Description of ProjektAnsehenController
 *
 * @author sloepfe
 */
class ProjektAnsehenController extends Controller{
/**
 * @Route("/projektAnsehen", name = "projekt_ansehen")
 */
    public function ProjektAnsehenAction(){
        return $this->render('projektAnsehen/projektAnsehen.html.twig');
    }    
}