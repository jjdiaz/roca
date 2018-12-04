<?php

namespace  Asm\Bundle\CloudinaryBundle;

use Asm\Bundle\CloudinaryBundle\DependencyInjection\AsmCloudinaryExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Asm\Bundle\CloudinaryBundle\DependencyInjection\Compiler\OroConfigCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\VarDumper\VarDumper;

class AsmCloudinaryBundle extends Bundle
{
//    public function getContainerExtension()
//    {
//        if(null===$this->extension){
//            $this->extension = new AsmCloudinaryExtension();
//        }
//        return $this->extension;
//
//        return new Uncon();
//
//    }

    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new OroConfigCompilerPass());
    }
}
