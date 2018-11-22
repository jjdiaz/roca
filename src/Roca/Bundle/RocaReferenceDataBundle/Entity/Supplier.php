<?php
/**
 * Created by ASM Web Services.
 * @date:   10/10/2018 18:27
 * @author:     Joaquín Jiménez <jjimenez@asmws.com>
 * @copyright   2018 ASM Web Services (http://asmws.com)
 *
 */

namespace Roca\Bundle\RocaReferenceDataBundle\Entity;

use Pim\Bundle\CustomEntityBundle\Entity\AbstractCustomEntity;


class Supplier extends AbstractCustomEntity
{
    protected $name;
    protected $email;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }


}