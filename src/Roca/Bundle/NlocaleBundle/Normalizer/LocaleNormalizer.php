<?php

namespace Roca\Bundle\NlocaleBundle\Normalizer;

use Pim\Bundle\UserBundle\Context\UserContext;
use Pim\Component\Catalog\Model\LocaleInterface;
use Roca\Bundle\NlocaleBundle\Entity\Locale;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Roca\Bundle\MarketizableBundle\Component\Intl\AsmLocale;

/**
 * Locale normalizer
 *
 * @author    Julien Sanchez <julien@akeneo.com>
 * @copyright 2015 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class LocaleNormalizer implements NormalizerInterface
{
    /** @var string[] */
    protected $supportedFormats = ['internal_api'];

    /** @var UserContext */
    protected $userContext;

    /**
     * @param UserContext $userContext
     */
    public function __construct(UserContext $userContext)
    {
        $this->userContext = $userContext;
    }

    /**
     * @param Locale $locale
     * @param null $format
     * @param array $context
     * @return array|bool|float|int|string
     */
    public function normalize($locale, $format = null, array $context = [])
    {
        return [
            'code'     => $locale->getCode(),
            'label'    => $this->getLocaleLabel($locale->getCode()),
            'region'   => \Locale::getDisplayRegion($locale->getLocaleCode()),
            'language' => \Locale::getDisplayLanguage($locale->getLocaleCode()),
            'marketname'   => $locale->getMarketname(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof LocaleInterface && in_array($format, $this->supportedFormats);
    }

    /**
     * Returns the label of a locale in the specified language
     *
     * @param string $code        the code of the locale to translate
     * @param string $translateIn the locale in which the label should be translated (if null, user locale will be used)
     *
     * @return string
     */
    private function getLocaleLabel($code, $translateIn = null)
    {
        $translateIn = $translateIn ?: $this->userContext->getUiLocaleCode();

        return \Locale::getDisplayName($code, $translateIn);
    }
}
