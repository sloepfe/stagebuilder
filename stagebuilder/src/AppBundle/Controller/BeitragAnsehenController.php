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
 * Description of BeitragAnsehenController
 *
 * @author sloepfe
 */
class BeitragAnsehenController extends Controller{
/**
 * @Route("/beitragAnsehen", name = "beitrag_ansehen")
 */
    public function BeitragAnsehenAction(){
        return $this->render('beitragAnsehen/beitragAnsehen.html.twig');
    }    
}
