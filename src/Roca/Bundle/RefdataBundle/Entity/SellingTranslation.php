<?php

namespace Roca\Bundle\RefdataBundle\Entity;

use Akeneo\Component\Localization\Model\AbstractTranslation;
use Akeneo\Component\Localization\Model\TranslationInterface;
use Pim\Component\Catalog\Model\FamilyTranslationInterface;

/**
 * Selling translation entity
 *
 * @author    J
 * @copyright 2017 ASMWS
 */
class SellingTranslation extends AbstractTranslation implements TranslationInterface
{
    /** @var string */
    protected $description;

    /** @var string */
    protected $lead;


    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) 'Selling_Translation:'.$this->getId();
    }

    /**
     * @return string
     */
    public function getLead()
    {
        return $this->lead;
    }

    /**
     * @param string $lead
     */
    public function setLead($lead)
    {
        $this->lead = $lead;
    }


}
