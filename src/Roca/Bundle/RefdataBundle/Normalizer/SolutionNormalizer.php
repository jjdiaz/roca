<?php
/**
 * Created by ASM Web Services.
 * @date:   11/10/2018 12:53
 * @author:     Joaquín Jiménez <jjimenez@asmws.com>
 * @copyright   2018 ASM Web Services (http://asmws.com)
 *
 */

namespace Roca\Bundle\RefdataBundle\Normalizer;

use Pim\Bundle\CustomEntityBundle\Entity\AbstractTranslatableCustomEntity;
use Roca\Bundle\RefdataBundle\Entity\Country;
use Roca\Bundle\RefdataBundle\Entity\Solution;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\scalar;


class SolutionNormalizer implements NormalizerInterface
{
    /** @var string[] */
    protected $supportedFormats = ['standard'];


    /**
     * @param Solution $entity
     * @param null $format
     * @param array $context
     * @return array|bool|float|int|string
     */
    public function normalize($entity, $format = null, array $context = array())
    {

       $result= [
           'id'             => $entity->getId(),
           'code'           => $entity->getCode(),
           'name'        => $entity->getName(),
           'websort'        => $entity->getWebsort(),
//           'designlines'    => $entity->getDesignlines(),
            'labels' => $this->getLabels($entity)
       ];
       return $result;
    }

    /**
     * @param mixed $data
     * @param null $format
     * @return bool
     */
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof Solution  && in_array($format, $this->supportedFormats);
    }


    /**
     * @param AbstractTranslatableCustomEntity $entity
     *
     * @return array
     */
    protected function getLabels(AbstractTranslatableCustomEntity $entity): array
    {
        $labels = [];
        foreach ($entity->getTranslations() as $translation) {
            $labels[$translation->getLocale()] = $translation->getLabel();
        }
        return $labels;
    }
}