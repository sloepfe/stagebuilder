<?php



namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\SecurityContext;
 


/**
 * Description of SecurityController
 *
 * @author sloepfe
 */

class SecurityController extends Controller{
    /**
     * @Route("/login", name="login")
     */
    
    public function loginAction(Request $request)
    {
        $authenticationUtils = $this-> get('security.authentication_utils');
        
        // get login error
        $error = $authenticationUtils->getLastAuthenticationError();
        
        //last username entered by user
        $lastUsername = $authenticationUtils->getLastUsername();
        
        return $this-> render(
                'security/login.html.twig',
                array(
                    //last username entered by user
                    'last_username'=> $lastUsername,
                    'error'=> $error,
                    )
                );
                
    }
    
    public function NeuesProjektAction()
     /**
     * @Route("/neuesProjekt", name="neues_Projekt")
     */       
    {
        return $this -> render('neuesProjekt/neuesProjekt.html.twig');
        
    }
    
}
