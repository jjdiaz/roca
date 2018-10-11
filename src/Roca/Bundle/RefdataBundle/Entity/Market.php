<?php

namespace Roca\Bundle\RefdataBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Pim\Bundle\CustomEntityBundle\Entity\AbstractCustomEntity;
use Pim\Bundle\CustomEntityBundle\Entity\AbstractTranslatableCustomEntity;
use Pim\Component\ReferenceData\Model\AbstractReferenceData;
use spec\Pim\Bundle\CustomEntityBundle\Entity\CustomEntity;


/**
 * Market
 *
 */
class Market extends AbstractTranslatableCustomEntity
{

    /** @var ArrayCollection */
    protected $locales;

    /**
     * @var string
     *
     */
    protected $webBaseUrl;

    /**
     * @var boolean
     */
    protected $mdmMarket;

    /**
     * @var ArrayCollection
     */
    protected $countries;

    /** @var string */
    protected $currency;



    /**
     * @return string
     */
    public function getWebBaseUrl()
    {
        return $this->webBaseUrl;
    }

    /**
     * @param string $webBaseUrl
     */
    public function setWebBaseUrl($webBaseUrl)
    {
        $this->webBaseUrl = $webBaseUrl;
    }

    /**
     * @return bool
     */
    public function isMdmMarket()
    {
        return $this->mdmMarket;
    }

    /**
     * @param bool $mdmMarket
     */
    public function setMdmMarket($mdmMarket)
    {
        $this->mdmMarket = $mdmMarket;
    }

    public function getCustomEntityName() : string
    {
        return 'market';
    }

    public function getTranslationFQCN()
    {
        return 'Roca\Bundle\RefdataBundle\Entity\MarketTranslation';
    }

    /**
     * @return ArrayCollection
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * @param ArrayCollection $countries
     */
    public function setCountries($countries)
    {
        $this->countries = $countries;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    public function __construct()
    {
        $this->countries = new ArrayCollection();
        $this->locales = new ArrayCollection();
    }

    /**
     * @return ArrayCollection
     */
    public function getLocales()
    {
        return $this->locales;
    }

    /**
     * @param ArrayCollection $locales
     */
    public function setLocales($locales)
    {
        $this->locales = $locales;
    }



}
