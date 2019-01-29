<?php
namespace Roca\Bundle\RefdataBundle\Entity;

use Roca\Bundle\RefdataBundle\Entity\TranslatableCustomEntityInterface;
use Akeneo\Component\Localization\Model\AbstractTranslation;
use Akeneo\Component\Localization\Model\TranslationInterface;

/**
 * CountryTranslation entity
 *
 * @author    J
 * @copyright 2017 ASMWS
 */
class CountryTranslation extends AbstractTranslation implements TranslationInterface, TranslatableCustomEntityInterface
{

    /**
     * @var string $label
     */
    protected $label;

    /**
     * @param string $label
     *
     * @return TranslatableCustomEntityInterface
     */
    public function setLabel(string $label): TranslatableCustomEntityInterface
    {
        $this->label = $label;
        return $this;
    }
    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->label;
    }
}
