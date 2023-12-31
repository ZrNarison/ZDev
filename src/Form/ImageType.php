<?php

namespace App\Form;

use App\Form\AppType;
use App\Entity\Posteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;

class ImageType extends AppType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Photo',FileType::class, $this->conf(" ",""))
            ->add('Caption',TextType::class, $this->conf("Déscription : ","Lengendes"))
            // ->add('Submit',ButtonType::class, $this->conf("+",""))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Posteur::class,
        ]);
    }
}
