<?php

namespace Roca\Bundle\RefdataBundle\Entity;

use ASM\Bundle\ASMXmlConnectorBundle\ASMXMLExportableInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Pim\Bundle\CustomEntityBundle\Entity\AbstractCustomEntity;
use Pim\Bundle\CustomEntityBundle\Entity\AbstractTranslatableCustomEntity;
use Pim\Component\ReferenceData\Model\AbstractReferenceData;
use spec\Pim\Bundle\CustomEntityBundle\Entity\CustomEntity;


/**
 * DesignLine
 *
 */
class DesignLine extends AbstractTranslatableCustomEntity
{

    /** @var string  */
    protected $name;

    /** @var integer */
    protected $websort;

    /** @var ArrayCollection */
    protected $availableFor;

    /** @var ArrayCollection */
    protected $publishableTo;

    /** @var Designer   */
    protected $designer;

    /** @var ArrayCollection */
    protected $solutions;

    /** @var integer */
    protected $status;

    /** @var boolean */
    protected $fullset;

    /** @var \DateTime */
    protected $dateAvailability;

    /** @var \DateTime */
    protected $dateCancelation;

    /** @var \DateTime */
    protected $modificationDate;

    /** @var string  */
    protected $technology;

    /** @var ArrayCollection */
    protected $emblematicWorks;

    /** @var integer */
    protected $version;

    /** @var ArrayCollection */
    protected $distinctions;


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
        return 'designline';
    }

    public function getTranslationFQCN()
    {
        return 'Roca\Bundle\RefdataBundle\Entity\DesignLineTranslation';
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

    /**
     * @return ArrayCollection
     */
    public function getAvailableFor()
    {
        return $this->availableFor;
    }

    /**
     * @param ArrayCollection $availableFor
     */
    public function setAvailableFor($availableFor)
    {
        $this->availableFor = $availableFor;
    }

    /**
     * @return ArrayCollection
     */
    public function getPublishableTo()
    {
        return $this->publishableTo;
    }

    /**
     * @param ArrayCollection $publishableTo
     */
    public function setPublishableTo($publishableTo)
    {
        $this->publishableTo = $publishableTo;
    }

    /**
     * @return Designer
     */
    public function getDesigner()
    {
        return $this->designer;
    }

    /**
     * @param Designer $designer
     */
    public function setDesigner($designer)
    {
        $this->designer = $designer;
    }

    public function __construct()
    {
        parent::__construct();
        $this->solutions = new ArrayCollection();
        $this->availableFor = new ArrayCollection();
        $this->publishableTo = new ArrayCollection();
        $this->emblematicWorks = new ArrayCollection();
        $this->distinctions = new ArrayCollection();
    }

    /**
     * @return ArrayCollection
     */
    public function getSolutions()
    {
        return $this->solutions;
    }

    /**
     * @param ArrayCollection $solutions
     */
    public function setSolutions($solutions)
    {
        $this->solutions = $solutions;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return bool
     */
    public function isFullset()
    {
        return $this->fullset;
    }

    /**
     * @param bool $fullset
     */
    public function setFullset($fullset)
    {
        $this->fullset = $fullset;
    }

    /**
     * @return \DateTime
     */
    public function getDateAvailability()
    {
        return $this->dateAvailability;
    }

    /**
     * @param \DateTime $dateAvailability
     */
    public function setDateAvailability($dateAvailability)
    {
        $this->dateAvailability = $dateAvailability;
    }

    /**
     * @return \DateTime
     */
    public function getDateCancelation()
    {
        return $this->dateCancelation;
    }

    /**
     * @param \DateTime $dateCancelation
     */
    public function setDateCancelation($dateCancelation)
    {
        $this->dateCancelation = $dateCancelation;
    }

    /**
     * @return \DateTime
     */
    public function getModificationDate()
    {
        return $this->modificationDate;
    }

    /**
     * @param \DateTime $modificationDate
     */
    public function setModificationDate($modificationDate)
    {
        $this->modificationDate = $modificationDate;
    }

    /**
     * @return string
     */
    public function getTechnology()
    {
        return $this->technology;
    }

    /**
     * @param string $technology
     */
    public function setTechnology($technology)
    {
        $this->technology = $technology;
    }

    /**
     * @return ArrayCollection
     */
    public function getEmblematicWorks()
    {
        return $this->emblematicWorks;
    }

    /**
     * @param ArrayCollection $emblematicWorks
     */
    public function setEmblematicWorks($emblematicWorks)
    {
        $this->emblematicWorks = $emblematicWorks;
    }

    /**
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param int $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return ArrayCollection
     */
    public function getDistinctions()
    {
        return $this->distinctions;
    }

    /**
     * @param ArrayCollection $distinctions
     */
    public function setDistinctions($distinctions)
    {
        $this->distinctions = $distinctions;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) 'DesignLine:'.$this->getName();
    }

}
