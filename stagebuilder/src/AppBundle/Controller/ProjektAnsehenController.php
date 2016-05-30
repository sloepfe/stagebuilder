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

use AppBundle\Entity\Beitrag;

/*
 * für formularerstellung
 */
use AppBundle\Form\BeitragType;
/**
 * Description of ProjektAnsehenController
 *
 * @author sloepfe
 */
class ProjektAnsehenController extends Controller{
/**
 * @Route("/projektAnsehen/{projektNr}", name = "projekt_ansehen")
 */
        public function ProjektAnsehenAction($projektNr){
        
        $beitraege = $this->getDoctrine()
        ->getRepository('AppBundle:Beitrag')
        ->findByProjektId($projektNr);
        
        return $this->render('projektAnsehen/projektAnsehen.html.twig', array('beitraege' => $beitraege));
    }
    
  
    /**
     * @Route("/neuerBeitrag/{projektNr}/{user}", name =  "neuer_Beitrag" )
     */

    public function NeuerBeitragAction(Request $request, $projektNr, $user)
    {
        // build the form
        $beitrag = new Beitrag();
        $form = $this->createForm(BeitragType::class, $beitrag, array('id' => $projektNr, 'user'=> $user));
        
        //handle the submit
        $form->handleRequest($request);
        if($form->isSubmitted() && $form ->isValid()){
            
            
           
           
            
              // $file stores the uploaded jpg file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $beitrag->getFrontpic();

            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where pictures are stored
            $brochuresDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/brochures';
            $file->move($brochuresDir, $fileName);

            // Update the 'brochure' property to store the jpg file name
            // instead of its contents
            $beitrag->setFrontpic($fileName);

       
            
            
              // $file stores the uploaded jpg file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $beitrag->getLeftsidepic();

            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $brochuresDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/brochures';
            $file->move($brochuresDir, $fileName);

            // Update the 'brochure' property to store the jpg file name
            // instead of its contents
            $beitrag->setLeftsidepic($fileName);

         
            
            
              // $file stores the uploaded jpg file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $beitrag->getRightsidepic();

            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where brochures are stored
            $brochuresDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/brochures';
            $file->move($brochuresDir, $fileName);

            // Update the 'brochure' property to store the jpg file name
            // instead of its contents
            $beitrag->setRightsidepic($fileName);

               
            
          
            
            
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($beitrag);
            $em->flush();
            
           
            //$this->get('session')->getFlashBag()->add('notice','Neuer Beitrag erstellt'); 
            
            return $this->redirectToRoute("projekt_uebersicht");
        }
            return $this->render('neuerBeitrag/neuerBeitrag.html.twig',array('form' => $form->createView()));
}


        }
