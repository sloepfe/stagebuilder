<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

/*
 *projekt und response nötig für doctrine 
 */
use AppBundle\Entity\Beitrag;

/*
 * für formularerstellung
 */
use AppBundle\Form\BeitragType;

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

    public function NeuerBeitragAction(Request $request)
    {
        // build the form
        $beitrag = new Beitrag();
        $form = $this->createForm(BeitragType::class, $beitrag);
        
        //handle the submit
        $form->handleRequest($request);
        if($form->isSubmitted() && $form ->isValid()){
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($beitrag);
            $em->flush();
            
            $this->get('session')->getFlashBag()->add('notice','Neuer Beitrag erstellt');   
            
            return $this->redirectToRoute("neuer_Beitrag");
        }
        
        return $this->render('neuerBeitrag/neuerBeitrag.html.twig',array('form' => $form->createView()));
        
    }
}