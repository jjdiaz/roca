<?php

namespace Roca\Bundle\CloudinaryConnectorBundle;

use Asm\Bundle\CloudinaryBundle\DependencyInjection\Compiler\OroConfigCompilerPass;
use Symfony\Component\HttpKernel\Bundle\Bundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;


class CloudinaryConnectorBundle extends Bundle
{

    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new OroConfigCompilerPass());
    }
}
