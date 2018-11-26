<?php

namespace Roca\Bundle\CloudinaryConnectorBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Roca\Bundle\CloudinaryConnectorBundle\DependencyInjection\OroConfigCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;


class CloudinaryConnectorBundle extends Bundle
{

    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
//        $container->addCompilerPass(new OroConfigCompilerPass());
    }
}
