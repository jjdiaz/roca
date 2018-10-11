<?php

namespace Roca\Bundle\RefdataBundle\Entity;

use Pim\Bundle\CustomEntityBundle\Entity\AbstractCustomEntity;
use Pim\Bundle\CustomEntityBundle\Entity\AbstractTranslatableCustomEntity;
use Pim\Component\ReferenceData\Model\AbstractReferenceData;


/**
 * Brand
 *
 */
class Locale extends AbstractCustomEntity
{

    /**
     * @var \Pim\Bundle\CatalogBundle\Entity\Locale
     *
     */
    protected $akeneoLocale;

    public function getCustomEntityName() : string
    {
        return 'locale';
    }

    /**
     * @return \Pim\Bundle\CatalogBundle\Entity\Locale
     */
    public function getAkeneoLocale()
    {
        return $this->akeneoLocale;
    }

    /**
     * @param \Pim\Bundle\CatalogBundle\Entity\Locale $akeneoLocale
     */
    public function setAkeneoLocale($akeneoLocale)
    {
        $this->akeneoLocale = $akeneoLocale;
    }



}
