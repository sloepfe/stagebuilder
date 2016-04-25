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
use AppBundle\Entity\Projekt;

/*
 * für formularerstellung
 */
use AppBundle\Form\ProjektType;
/*
 * rest für controller
 */
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
/**
 * Description of NeuesProjektController
 *
 * @author sloepfe
 */
class NeuesProjektController extends Controller{
    
    /**
     * @Route("/neuesProjekt", name="neues_Projekt")
     */
    
    public function NeuesProjektAction(Request $request)
    {
        // build the form
        $projekt = new Projekt();
        $form = $this->createForm(ProjektType::class, $projekt);
        
        //handle the submit
        $form->handleRequest($request);
        if($form->isSubmitted() && $form ->isValid()){
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($projekt);
            $em->flush();
            
            $this->get('session')->getFlashBag()->add('project','Neues Projekt erstellt');
            
            return $this->redirectToRoute("neuer_Beitrag");
        }
        
        return $this -> render('neuesProjekt/neuesProjekt.html.twig',array('form' => $form->createView()));
        
        
    }
    
    
}
