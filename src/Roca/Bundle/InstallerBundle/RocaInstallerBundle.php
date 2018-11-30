<?php


namespace Roca\Bundle\InstallerBundle;

use PimEnterprise\Bundle\InstallerBundle\PimEnterpriseInstallerBundle;

class RocaInstallerBundle extends PimEnterpriseInstallerBundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'PimEnterpriseInstallerBundle';
    }
}
