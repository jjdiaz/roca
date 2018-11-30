<?php

namespace Roca\Bundle\RefdataBundle\Entity;

use ASM\Bundle\ASMXmlConnectorBundle\ASMXMLExportableInterface;
use Pim\Bundle\CustomEntityBundle\Entity\AbstractCustomEntity;
use Pim\Bundle\CustomEntityBundle\Entity\AbstractTranslatableCustomEntity;
use Pim\Component\ReferenceData\Model\AbstractReferenceData;
use spec\Pim\Bundle\CustomEntityBundle\Entity\CustomEntity;


/**
 * Country
 *
 */
class Designer extends AbstractTranslatableCustomEntity
{
    /**
     * @var string
     *
     */
    protected $pcmname;

    /** @var string */
    protected $websort;

    /**
     * @return string
     */
    public function getPcmname(): string
    {
        return $this->pcmname;
    }

    /**
     * @param string $pcmname
     */
    public function setPcmname(string $pcmname): void
    {
        $this->pcmname = $pcmname;
    }

    /**
     * @return string
     */
    public function getWebsort(): string
    {
        return $this->websort;
    }

    /**
     * @param string $websort
     */
    public function setWebsort(string $websort): void
    {
        $this->websort = $websort;
    }


    public function getCustomEntityName() : string
    {
        return 'designer';
    }

    public function getTranslationFQCN()
    {
        return 'Roca\Bundle\RefdataBundle\Entity\DesignerTranslation';
    }


//    public function __get($property) {
//        if (property_exists($this, $property)) {
//            return $this->$property;
//        }
//    }

}
