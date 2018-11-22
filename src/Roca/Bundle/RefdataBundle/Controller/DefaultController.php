<?php
/**
 * Created by ASM Web Services.
 * @date:   13/10/2018 21:21
 * @author:     Joaquín Jiménez <jjimenez@asmws.com>
 * @copyright   2018 ASM Web Services (http://asmws.com)
 *
 */

namespace Roca\Bundle\RefdataBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/test")
     */
    public function testAction(){
        echo $this->get('translator')->trans('roca_test');
    }
}