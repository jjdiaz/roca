<?php

namespace Roca\Bundle\RefdataBundle\Entity;

use ASM\Bundle\ASMXmlConnectorBundle\ASMXMLExportableInterface;
use Pim\Bundle\CustomEntityBundle\Entity\AbstractCustomEntity;
use Pim\Bundle\CustomEntityBundle\Entity\AbstractTranslatableCustomEntity;
use Pim\Component\ReferenceData\Model\AbstractReferenceData;
use spec\Pim\Bundle\CustomEntityBundle\Entity\CustomEntity;


/**
 * Distinction
 *
 */
class Distinction extends AbstractTranslatableCustomEntity
{


    /**
     * @var string
     *
     */
    protected $pcmName;

    /** @var int */
    protected $year;

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
        return 'distinction';
    }

    public function getTranslationFQCN()
    {
        return 'Roca\Bundle\RefdataBundle\Entity\DistinctionTranslation';
    }

    /**
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param int $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }



}
