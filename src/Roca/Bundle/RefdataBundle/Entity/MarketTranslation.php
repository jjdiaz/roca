<?php

namespace Roca\Bundle\RefdataBundle\Entity;

use Akeneo\Component\Localization\Model\AbstractTranslation;
use Akeneo\Component\Localization\Model\TranslationInterface;
use Pim\Component\Catalog\Model\FamilyTranslationInterface;

/**
 * Market translation entity
 *
 * @author    J
 * @copyright 2017 ASMWS
 */
class MarketTranslation extends AbstractTranslation implements TranslationInterface
{
    /** @var string */
    protected $description;

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
        return (string) 'MarketTranslation:'.$this->getId();
    }
}
