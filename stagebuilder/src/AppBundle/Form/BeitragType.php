<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\FileType;


/**
 * Description of BeitragType
 *
 * @author sloepfe
 */
class BeitragType extends AbstractType{
    
    var $projektId;
    var $user;
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->projektId = $options['id'];
        $this->user = $options['user'];
        
        $builder
            ->add('projektId', TextType::class, array( 'data' => $this->projektId))
            ->add('titel', TextType::class)
            ->add('ersteller', TextType::class, array( 'data'=> $this-> user))
            ->add('reihenfolge', TextType::class)
            ->add('dauer', TextType::class)
            ->add('startzeit', TextType::class)
            ->add('lied', TextType::class)
            ->add('materialliste',TextType::class)
        
        ->add('frontpic', FileType::class, array('label' => 'Front Bild (JPG-File)'))
        ->add('leftsidepic', FileType::class, array('label' => 'Linke Seite (JPG-File)'))
        ->add('rightsidepic', FileType::class, array('label' => 'Rechte Seite (JPG-File)'));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Beitrag',
            'id' => null,
            'user'=>null,
            'projektId'=>null,
        ));
}

    }
