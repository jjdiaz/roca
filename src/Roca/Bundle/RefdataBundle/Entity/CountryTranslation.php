<<<<<<< HEAD
<?php

namespace Roca\Bundle\RefdataBundle\Entity;

use Akeneo\Component\Localization\Model\AbstractTranslation;
use Akeneo\Component\Localization\Model\TranslationInterface;
use Pim\Component\Catalog\Model\FamilyTranslationInterface;

/**
 * CountryTranslation entity
 *
 * @author    J
 * @copyright 2017 ASMWS
 */
class CountryTranslation extends AbstractTranslation implements TranslationInterface
{
    /** @var string */
    protected $name;

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
     * @return string
     */
    public function __toString()
    {
        return (string) $this->getName();
    }
}
=======
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
>>>>>>> jjd/cloudinary
