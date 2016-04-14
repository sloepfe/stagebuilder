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
 * Description of DiashowController
 *
 * @author sloepfe
 */
class DiashowController extends Controller {
    /**
     * @Route("/diashow", name = "diashow")
     */
    
    public function DiashowAction(){
        return $this->render('/diashow/diashow.html.twig');
    }
}
