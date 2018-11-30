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
class ResourceMarketLocale extends AbstractCustomEntity
{

    /** @var Locale */
    protected $locale;

    /**
     * @var Market
     *
     */
    protected $market;


    /**
     *
     * indica que es la imagen por defecto ( de entre todas las que tiene ese recurso )
     *
     * @var boolean
     */
    protected $activo;

    /**
     * @return Locale
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param Locale $locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }

    /**
     * @return Market
     */
    public function getMarket()
    {
        return $this->market;
    }

    /**
     * @param Market $market
     */
    public function setMarket($market)
    {
        $this->market = $market;
    }

    /**
     * @return bool
     */
    public function isActivo()
    {
        return $this->activo;
    }

    /**
     * @param bool $activo
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;
    }





}
