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
 * Search
 *
 */
class Search extends AbstractTranslatableCustomEntity
{


    /** @var integer */
    protected $websort;

    /** @var ArrayCollection */
    protected $sellings;


    public function getCustomEntityName() : string
    {
        return 'search';
    }

    public function getTranslationFQCN()
    {
        return 'Roca\Bundle\RefdataBundle\Entity\SearchTranslation';
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

    /**
     * @return ArrayCollection
     */
    public function getSellings()
    {
        return $this->sellings;
    }

    /**
     * @param ArrayCollection $selling
     */
    public function setSellings($selling)
    {
        $this->sellings = $selling;
    }

    public function __construct()
    {
        parent::__construct();
        $this->sellings = new ArrayCollection();
    }


}
