<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Entity\Beitrag;
use AppBundle\Entity\Projekt;
use AppBundle\Form\BeitragType;
use Symfony\Component\HttpFoundation\Request;


/**
 * Description of BeitragAnsehenController
 *
 * @author sloepfe
 */
class BeitragAnsehenController extends Controller{
/**
 * @Route("/beitragAnsehen/{beitragNr}", name = "beitrag_ansehen")
 */
public function BeitragAnsehenAction($beitragNr){
        
        
        $beitraege = $this->getDoctrine()
        ->getRepository('AppBundle:Beitrag')
        ->findById($beitragNr);
        
        
        return $this->render('beitragAnsehen/beitragAnsehen.html.twig', array('beitraege' => $beitraege, 'projektNr'=> $beitragNr));
    }    


    
 /**
 *
 * @Route("article_remove/{beitragNr}/{projektId}", name="article_remove")
 * 
 *
 */

public function DeleteBeitragAction(Beitrag $beitragNr, Projekt $projektId){
    
    $em = $this->getDoctrine()->getManager();
    $em->remove($beitragNr);
    $em->flush();
    
    $beitraege = $this->getDoctrine()
        ->getRepository('AppBundle:Beitrag')
        ->findByProjektId($projektId);
        
        return $this->render('projektAnsehen/projektAnsehen.html.twig', array('beitraege' => $beitraege));
        

}

/**
 *
 * @Route("article_change/{beitragNr}", name="article_change")
 * @Method({"GET", "POST"})
 *
 */




        

}