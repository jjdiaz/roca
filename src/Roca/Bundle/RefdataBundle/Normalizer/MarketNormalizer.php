<?php
/**
 * Created by ASM Web Services.
 * @date:   01/02/2019 12:53
 * @author:     J <jlopez@asmws.com>
 * @copyright   2019 ASM Web Services (http://www.asmws.com)
 *
 */

namespace Roca\Bundle\RefdataBundle\Normalizer;

use Pim\Bundle\CustomEntityBundle\Entity\AbstractTranslatableCustomEntity;
use Roca\Bundle\RefdataBundle\Entity\Country;
use Roca\Bundle\RefdataBundle\Entity\Market;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;


class MarketNormalizer implements NormalizerInterface
{
    /** @var string[] */
    protected $supportedFormats = ['standard'];


    /**
     * @param Market $entity
     * @param null $format
     * @param array $context
     * @return array|bool|float|int|string
     */
    public function normalize($entity, $format = null, array $context = array())
    {

       $result= [
           'id'             => $entity->getId(),
           'code'           => $entity->getCode(),
           'currency'        => $entity->getCurrency(),
           'locales'        => $entity->getLocales(),
           'mdmMarket'        => $entity->isMdmMarket(),
           'webBaseUrl'        => $entity->getWebBaseUrl(),
           'descriptions'         => $this->getDescriptions($entity),
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
        return $data instanceof Market  && in_array($format, $this->supportedFormats);
    }


    /**
     * @param AbstractTranslatableCustomEntity $entity
     *
     * @return array
     */
    protected function getDescriptions(AbstractTranslatableCustomEntity $entity): array
    {
        $labels = [];
        foreach ($entity->getTranslations() as $translation) {
            $labels[$translation->getLocale()] = $translation->getDescription();
        }
        return $labels;
    }
}