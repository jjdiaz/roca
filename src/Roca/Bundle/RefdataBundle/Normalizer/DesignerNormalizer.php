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
use Roca\Bundle\RefdataBundle\Entity\Designer;
use Roca\Bundle\RefdataBundle\Entity\DesignerTranslation;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\scalar;


class DesignerNormalizer implements NormalizerInterface
{
    /** @var string[] */
    protected $supportedFormats = ['standard'];


    /**
     * @param Designer $entity
     * @param null $format
     * @param array $context
     * @return array|bool|float|int|string
     */
    public function normalize($entity, $format = null, array $context = array())
    {

       $result= [
           'id'             => $entity->getId(),
           'code'           => $entity->getCode(),
           'pcmName'        => $entity->getPcmname(),
           'websort'    => $entity->getWebsort(),
           'descriptionLeads'         => $this->getDescriptionLeads($entity),
           'descriptionResumes'         => $this->getDescriptionResumes($entity),
           'descriptionNames'         => $this->getDescriptionNames($entity),
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
        return $data instanceof Designer  && in_array($format, $this->supportedFormats);
    }


    /**
     * @param DesignerTranslation $entity
     *
     * @return array
     */
    protected function getDescriptionLeads(AbstractTranslatableCustomEntity $entity): array
    {
        $labels = [];
        foreach ($entity->getTranslations() as $translation) {
            $labels[$translation->getLocale()] = $translation->getDescriptionLead();
        }
        return $labels;
    }

    /**
     * @param DesignerTranslation $entity
     *
     * @return array
     */
    protected function getDescriptionResumes(AbstractTranslatableCustomEntity $entity): array
    {
        $labels = [];
        foreach ($entity->getTranslations() as $translation) {
            $labels[$translation->getLocale()] = $translation->getDescriptionResume();
        }
        return $labels;
    }

    /**
     * @param DesignerTranslation $entity
     *
     * @return array
     */
    protected function getDescriptionNames(AbstractTranslatableCustomEntity $entity): array
    {
        $labels = [];
        foreach ($entity->getTranslations() as $translation) {
            $labels[$translation->getLocale()] = $translation->getDescriptionName();
        }
        return $labels;
    }


}