<?php

namespace Roca\Bundle\RefdataBundle\Entity;

use ASM\Bundle\ASMXmlConnectorBundle\ASMXMLExportableInterface;
use Entity\Category;
use Pim\Bundle\CustomEntityBundle\Entity\AbstractCustomEntity;
use Pim\Bundle\CustomEntityBundle\Entity\AbstractTranslatableCustomEntity;
use Pim\Component\ReferenceData\Model\AbstractReferenceData;
use spec\Pim\Bundle\CustomEntityBundle\Entity\CustomEntity;


/**
 * EmblematicWork
 *
 */
class EmblematicWork extends AbstractTranslatableCustomEntity
{


    /**
     * @var string
     */
    protected $pcmName;

    /**
     * @var integer
     */
    protected $installationDate;


    /**
     * @var Country
     */
    protected $country;

    /**
     * @var Market
     */
    protected $principalFor;

    /**
     * @var integer
     */
    protected $category;

    /**
     * @var string
     */
    protected $architect;

    /**
     * @var \DateTime
     */
    protected $pcmCreationDate;


    /**
     * @return string
     */
    public function getPcmName()
    {
        return $this->pcmName;
    }

    /**
     * @param string $pcmName
     */
    public function setPcmName($pcmName)
    {
        $this->pcmName = $pcmName;
    }

    public function getCustomEntityName() : string
    {
        return 'emblematic_work';
    }

    public function getTranslationFQCN()
    {
        return 'Roca\Bundle\RefdataBundle\Entity\EmblematicWorkTranslation';
    }

    /**
     * @return int
     */
    public function getInstallationDate()
    {
        return $this->installationDate;
    }

    /**
     * @param int $installationDate
     */
    public function setInstallationDate($installationDate)
    {
        $this->installationDate = $installationDate;
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param Country $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return Market
     */
    public function getPrincipalFor()
    {
        return $this->principalFor;
    }

    /**
     * @param Market $principalFor
     */
    public function setPrincipalFor($principalFor)
    {
        $this->principalFor = $principalFor;
    }

    /**
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param int $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getArchitect()
    {
        return $this->architect;
    }

    /**
     * @param string $architect
     */
    public function setArchitect($architect)
    {
        $this->architect = $architect;
    }

    /**
     * @return \DateTime
     */
    public function getPcmCreationDate()
    {
        return $this->pcmCreationDate;
    }

    /**
     * @param \DateTime $pcmCreationDate
     */
    public function setPcmCreationDate($pcmCreationDate)
    {
        $this->pcmCreationDate = $pcmCreationDate;
    }




}
