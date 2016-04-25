<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;


/**
 * Description of ProjektType
 *
 * @author sloepfe
 */
class ProjektType extends AbstractType
{

 public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titel', TextType::class)
            ->add('ersteller', TextType::class)
            ->add('datum', TextType::class);
        
    } 
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Projekt',
        ));
    }

}
