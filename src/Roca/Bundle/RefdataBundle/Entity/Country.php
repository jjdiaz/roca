<<<<<<< HEAD
<?php

namespace Roca\Bundle\RefdataBundle\Entity;

use Pim\Bundle\CustomEntityBundle\Entity\AbstractCustomEntity;
use Pim\Bundle\CustomEntityBundle\Entity\AbstractTranslatableCustomEntity;
use Pim\Component\ReferenceData\Model\AbstractReferenceData;
use spec\Pim\Bundle\CustomEntityBundle\Entity\CustomEntity;


/**
 * Country
 *
 */
class Country extends AbstractTranslatableCustomEntity
{

    /**
     * @var string
     *
     */
    protected $isoCode;


    /**
     * @var string
     *
     */
    protected $continent;

    /**
     * @var boolean
     */
    protected $mainCountry;

    /**
     * @var Market
     *
     */
    protected $market;




    /**
     * @return string
     */
    public function getIsoCode()
    {
        return $this->isoCode;
    }

    /**
     * @param string $isoCode
     */
    public function setIsoCode($isoCode)
    {
        $this->isoCode = $isoCode;
    }

    /**
     * @return string
     */
    public function getContinent()
    {
        return $this->continent;
    }

    /**
     * @param string $continent
     */
    public function setContinent($continent)
    {
        $this->continent = $continent;
    }

    /**
     * @return bool
     */
    public function isMainCountry()
    {
        return $this->mainCountry;
    }

    /**
     * @param bool $mainCountry
     */
    public function setMainCountry($mainCountry)
    {
        $this->mainCountry = $mainCountry;
    }

    public function getCustomEntityName() : string
    {
        return 'country';
    }

    public function getTranslationFQCN()
    {
        return 'Roca\Bundle\RefdataBundle\Entity\CountryTranslation';
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


}
=======
<?php

namespace Roca\Bundle\RefdataBundle\Entity;

use Pim\Bundle\CustomEntityBundle\Entity\AbstractCustomEntity;
use Pim\Bundle\CustomEntityBundle\Entity\AbstractTranslatableCustomEntity;
use Pim\Component\ReferenceData\Model\AbstractReferenceData;
use spec\Pim\Bundle\CustomEntityBundle\Entity\CustomEntity;


/**
 * Country
 *
 */
class Country extends AbstractTranslatableCustomEntity
{
    /**
     * @var string
     *
     */
    protected $isoCode;


    /**
     * @var string
     *
     */
    protected $continent;

    /**
     * @var boolean
     */
    protected $mainCountry;

    /**
     * @var Market
     *
     */
    protected $market;


    /**
     * @return string
     */
    public function getIsoCode()
    {
        return $this->isoCode;
    }

    /**
     * @param string $isoCode
     */
    public function setIsoCode($isoCode)
    {
        $this->isoCode = $isoCode;
    }

    /**
     * @return string
     */
    public function getContinent()
    {
        return $this->continent;
    }

    /**
     * @param string $continent
     */
    public function setContinent($continent)
    {
        $this->continent = $continent;
    }

    /**
     * @return bool
     */
    public function isMainCountry()
    {
        return $this->mainCountry;
    }

    /**
     * @param bool $mainCountry
     */
    public function setMainCountry($mainCountry)
    {
        $this->mainCountry = $mainCountry;
    }

    public function getCustomEntityName() : string
    {
        return 'country';
    }

    /**
     * Get the custom entity name used in the configuration
     *
     * @return string
     */
    public function getTranslationFQCN() : string
    {
        return CountryTranslation::class;
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
}
>>>>>>> jjd/cloudinary
