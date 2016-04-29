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
            
            // $file stores the uploaded PDF file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $projekt->getBrochure();

            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $brochuresDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/brochures';
            $file->move($brochuresDir, $fileName);

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $projekt->setBrochure($fileName);

            // ... persist the $product variable or any other work

            
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($projekt);
            $em->flush();
            //return $this->redirect($this->generateUrl('app_product_list'));
            //$this->get('session')->getFlashBag()->add('project','Neues Projekt erstellt');
            
            return $this->redirectToRoute("neuer_Beitrag");
        }
        
        return $this -> render('neuesProjekt/neuesProjekt.html.twig',array('form' => $form->createView()));
        
        
    }
    
    
}
