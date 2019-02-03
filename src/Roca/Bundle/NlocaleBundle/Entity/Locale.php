<?php

namespace Roca\Bundle\NlocaleBundle\Entity;

use Akeneo\Component\Versioning\Model\VersionableInterface;
use Pim\Component\Catalog\Model\LocaleInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Pim\Bundle\CatalogBundle\Entity\Locale as BaseLocale;


/**
 * Locale entity
 *
 * @author    Joaquin Jimenez <jjimenez@asmws.com>
 * @copyright 2019 ASMWS  (http://www.asmws.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *
 * @UniqueEntity("code")
 */
//class Locale implements LocaleInterface, VersionableInterface
class Locale extends BaseLocale //implements LocaleInterface, VersionableInterface
{
    /** @var string */
    protected $marketname;
    /** @var bool */
    protected $isamarket;

    /**
     * @return string
     */
    public function getMarketname()
    {
        return $this->marketname;
    }

    /**
     * @param string $marketname
     */
    public function setMarketname($marketname)
    {
        $this->marketname = $marketname;
    }

    /**
     * @return bool
     */
    public function isIsamarket()
    {
        return $this->isamarket;
    }

    /**
     * @param bool $isamarket
     */
    public function setIsamarket($isamarket)
    {
        $this->isamarket = $isamarket;
    }

    public function getLocaleCode(){
        if(!$this->isIsamarket())
            return $this->code;
        return substr($this->code,4,10);
    }

}
