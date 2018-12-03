<?php

namespace Roca\Bundle\RefdataBundle\Entity;

use ASM\Bundle\ASMXmlConnectorBundle\ASMXMLExportableInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Entity\Category;
use Pim\Bundle\CustomEntityBundle\Entity\AbstractCustomEntity;
use Pim\Bundle\CustomEntityBundle\Entity\AbstractTranslatableCustomEntity;
use Pim\Component\ReferenceData\Model\AbstractReferenceData;
use spec\Pim\Bundle\CustomEntityBundle\Entity\CustomEntity;


/**
 * Selling
 *
 */
class Selling extends AbstractTranslatableCustomEntity
{


    /** @var integer */
    protected $websort;

    /** @var ArrayCollection */
    protected $searchs;

    /*
     * nombre para lookups
     * basado en el en_GB_INT
     */
    /** @var string */
    protected $name;



    public function getCustomEntityName() : string
    {
        return 'selling';
    }

    public function getTranslationFQCN()
    {
        return 'Roca\Bundle\RefdataBundle\Entity\SellingTranslation';
    }

    /**
     * @return int
     */
    public function getWebsort()
    {
        return $this->websort;
    }

    /**
     * @param int $websort
     */
    public function setWebsort($websort)
    {
        $this->websort = $websort;
    }

    public function __construct()
    {
        parent::__construct();
        $this->searchs = new ArrayCollection();
    }

    /**
     * @return ArrayCollection
     */
    public function getSearchs()
    {
        return $this->searchs;
    }

    /**
     * @param ArrayCollection $searchs
     */
    public function setSearchs($searchs)
    {
        $this->searchs = $searchs;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }




}
