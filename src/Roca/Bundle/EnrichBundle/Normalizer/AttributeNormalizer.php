<?php
/**
 * Created by ASM Web Services.
 * @date:   14/10/2018 14:11
 * @author:     Joaquín Jiménez <jjimenez@asmws.com>
 * @copyright   2018 ASM Web Services (http://asmws.com)
 *
 */

namespace Roca\Bundle\EnrichBundle\Normalizer;

use Akeneo\Component\Localization\Localizer\LocalizerInterface;
use PimEnterprise\Bundle\EnrichBundle\Normalizer\AttributeNormalizer as PimAttributeNormalizer;
use Roca\Bundle\EnrichBundle\Entity\Attribute;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AttributeNormalizer extends PimAttributeNormalizer
{

    /** @var NormalizerInterface */
    protected $normalizer;

    public function __construct(NormalizerInterface $normalizer)
    {
        $this->normalizer = $normalizer;
    }

    /**
     * @param Attribute $attribute
     * @param null $format
     * @param array $context
     * @return array|bool|float|int|string
     */
    public function normalize($attribute, $format = null, array $context = [])
    {
        return $this->normalizer
                ->normalize($attribute, $format, $context) + ['is_read_only' => $attribute->isMarketizable()];
    }

}