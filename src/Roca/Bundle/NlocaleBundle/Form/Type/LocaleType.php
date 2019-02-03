<?php
/**
 * Created by ASM Web Services.
 * @date:   02/02/2019 22:06
 * @author:     Joaquín Jiménez <jjimenez@asmws.com>
 * @copyright   2018 ASM Web Services (http://asmws.com)
 *
 */
//
namespace Roca\Bundle\NlocaleBundle\Form\Type;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use PimEnterprise\Bundle\EnrichBundle\Form\Type\LocaleType as BaseLocaleType;

class LocaleType extends BaseLocaleType
{

    /** @var string Entity FQCN */
    protected $dataClass;

    /**
     * LocaleType constructor.
     * @param string $dataClass
     */
    public function __construct($dataClass = null)
    {
        $this->dataClass = $dataClass;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder
            ->add('marketname',TextType::class,['required' => false, 'label' => 'Market Name','help' => 'Roca Market Name'])
            ->add('isamarket', CheckboxType::class,['required' => false, 'label' => 'Is a Market','help' => 'Is a Market'])
        ;

    }
}
