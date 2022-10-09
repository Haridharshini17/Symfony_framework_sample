<?php
namespace App\Form\Type;

use App\Entity\StudentRegistration;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use symfony\component\OptionsResolver\OptionsResolver;

class StudentFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('StudentName', TextType::class)
        ->add('Age', IntegerType::class)
        // ->add('SubjectGroup', TextType::class)
        ->add('Save', SubmitType::class);
        ;
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => StudentRegistration::class,
        ]);
    }
}

?>