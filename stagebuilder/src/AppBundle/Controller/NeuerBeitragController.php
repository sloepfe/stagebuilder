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

    public function NeuerBeitragAction(Request $request, $projektNr)
    {
        // build the form
        $beitrag = new Beitrag();
        $form = $this->createForm(BeitragType::class, $beitrag);
        
        //handle the submit
        $form->handleRequest($request);
        if($form->isSubmitted() && $form ->isValid()){
            
            
           
           
            
              // $file stores the uploaded PDF file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $beitrag->getFrontpic();

            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $brochuresDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/brochures';
            $file->move($brochuresDir, $fileName);

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $beitrag->setFrontpic($fileName);

            // ... persist the $product variable or any other work    
            
            
              // $file stores the uploaded PDF file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $beitrag->getLeftsidepic();

            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $brochuresDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/brochures';
            $file->move($brochuresDir, $fileName);

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $beitrag->setLeftsidepic($fileName);

            // ... persist the $product variable or any other work   
            
            
            
              // $file stores the uploaded PDF file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $beitrag->getRightsidepic();

            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $brochuresDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/brochures';
            $file->move($brochuresDir, $fileName);

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $beitrag->setRightsidepic($fileName);

            // ... persist the $product variable or any other work   
            
            
            
            
          
            
            
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($beitrag);
            $em->flush();
            
            $this->get('session')->getFlashBag()->add('notice','Neuer Beitrag erstellt');   
            
            return $this->redirectToRoute("neuer_Beitrag");
        }
        
        return $this->render('neuerBeitrag/neuerBeitrag.html.twig',array('form' => $form->createView()));
        
    }
}