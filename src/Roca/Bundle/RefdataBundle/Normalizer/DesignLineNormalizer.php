<?php
/**
 * Created by ASM Web Services.
 * @date:   15/10/2018 6:54
 * @author:     Joaquín Jiménez <jjimenez@asmws.com>
 * @copyright   2018 ASM Web Services (http://asmws.com)
 *
 */

namespace Roca\Bundle\RefdataBundle\Normalizer;

use Roca\Bundle\RefdataBundle\Entity\DesignLine;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DesignLineNormalizer implements NormalizerInterface
{
    /** @var string[] */
    protected $supportedFormats = ['standard'];

    /**
     * @param DesignLine $entity
     * @param null $format
     * @param array $context
     * @return array|bool|float|int|string|void
     */
    public function normalize($entity, $format = null, array $context = [])
    {
        return [
            'id'        => $entity->getId(),
            'code'      => $entity->getCode(),
            'name'      => $entity->getName(),
            'designer'  => $entity->getDesigner(),
        ];
    }

    /**
     * @param mixed $data
     * @param null  $format
     *
     * @return bool
     */
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof DesignLine && in_array($format, $this->supportedFormats);
    }

}