<?php
/**
 * Created by ASM Web Services.
 * @date:   11/10/2018 12:53
 * @author:     Joaquín Jiménez <jjimenez@asmws.com>
 * @copyright   2018 ASM Web Services (http://asmws.com)
 *
 */

namespace Roca\Bundle\RefdataBundle\Normalizer;

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\scalar;
use Roca\Bundle\RefdataBundle\Entity\Brand;

class BrandNormalizer implements NormalizerInterface
{
    /** @var string[] */
    protected $supportedFormats = ['standard'];


    /**
     * @param Brand $entity
     * @param null $format
     * @param array $context
     * @return array|bool|float|int|string
     */
    public function normalize($entity, $format = null, array $context = array())
    {

       $result= [
           'id'     => $entity->getId(),
           'code'   => $entity->getCode(),
           'name'   => $entity->getName()
       ];
       return $result;
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof Brand;
    }
}