<?php

namespace Roca\Bundle\RefdataBundle\Entity;

use ASM\Bundle\ASMXmlConnectorBundle\ASMXMLExportableInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Pim\Bundle\CustomEntityBundle\Entity\AbstractCustomEntity;
use Pim\Bundle\CustomEntityBundle\Entity\AbstractTranslatableCustomEntity;
use Pim\Component\ReferenceData\Model\AbstractReferenceData;
use spec\Pim\Bundle\CustomEntityBundle\Entity\CustomEntity;


/**
 * Solution
 *
 */
class Solution extends AbstractTranslatableCustomEntity
{

    /**
     * @var string
     */
    protected $name;

    /** @var integer */
    protected $websort;


    /** @var ArrayCollection */
    protected $designlines;

    /**
     * @return integer
     */
    public function getWebsort()
    {
        return $this->websort;
    }

    /**
     * @param integer $websort
     */
    public function setWebsort($websort)
    {
        $this->websort = $websort;
    }


    public function getCustomEntityName() : string
    {
        return 'solution';
    }

    public function getTranslationFQCN()
    {
        return 'Roca\Bundle\RefdataBundle\Entity\SolutionTranslation';
    }

    public function __construct()
    {
        parent::__construct();
        $this->designlines = new ArrayCollection();
    }

    /**
     * @return ArrayCollection
     */
    public function getDesignlines()
    {
        return $this->designlines;
    }

    /**
     * @param ArrayCollection $designlines
     */
    public function setDesignlines($designlines)
    {
        $this->designlines = $designlines;
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
