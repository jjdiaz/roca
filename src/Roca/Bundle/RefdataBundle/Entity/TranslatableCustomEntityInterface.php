<?php
/**
 * Created by ASM Web Services.
 * @date:   24/01/2019 21:48
 * @author:     Joaquín Jiménez <jjimenez@asmws.com>
 * @copyright   2018 ASM Web Services (http://asmws.com)
 *
 */

namespace Roca\Bundle\RefdataBundle\Entity;


interface TranslatableCustomEntityInterface
{
    /**
     * @param string $label
     *
     * @return TranslatableCustomEntityInterface
     */
    public function setLabel(string $label): TranslatableCustomEntityInterface;

    /**
     * @return string
     */
    public function getLabel():string;
}

