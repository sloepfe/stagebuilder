<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Form\Extension\Core\Type\FileType;


/**
 * Description of ProjektType
 *
 * @author sloepfe
 */
class ProjektType extends AbstractType
{
    var $user;

 public function buildForm(FormBuilderInterface $builder, array $options)
    {
     
     $this->user = $options['user'];
     
        $builder
            ->add('titel', TextType::class)
            ->add('ersteller', TextType::class,array( 'data'=> $this-> user))
            ->add('datum', TextType::class)
                
            ->add('brochure', FileType::class, array('label' => 'Image (JPG-File'));
        
    } 
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Projekt',
            'user'=> null,
        ));
    }

}
