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
 * Description of NeuerBeitragController
 *
 * @author sloepfe
 */
class NeuerBeitragController extends Controller{
/**
 *@Route("/neuerBeitrag", name =  "neuer_Beitrag" )
 */

    public function NeuerBeitragAction()
    {
        return $this->render('neuerBeitrag/neuerBeitrag.html.twig');
        
    }
}