<?php

namespace Roca\Bundle\RefdataBundle\Entity\Repository;

use Pim\Bundle\CustomEntityBundle\Entity\Repository\CustomEntityRepository;

/**
 *
 * @author  J <jlopez@asmws.com>
 * @copyright 2017 ASMWS (http://www.asmws.com)
 */
class ExportAttributeRepository extends CustomEntityRepository {

    public function findByPartialPathName($partialPath)
    {
        $qb = $this->_em->createQueryBuilder();
        $qb
            ->select('e')
            ->from('ASMASMBundle:ExportAttribute','e')
            ->where('e.path LIKE :path')
        ->setParameter('path',$partialPath);

        return $qb->getQuery()->execute();
    }

}