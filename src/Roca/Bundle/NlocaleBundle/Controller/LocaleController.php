<?php

/*
 * This file is part of the Akeneo PIM Enterprise Edition.
 *
 * (c) 2014 Akeneo SAS (http://www.akeneo.com)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace  Roca\Bundle\NlocaleBundle\Controller;

use Oro\Bundle\SecurityBundle\Annotation\AclAncestor;
use Pim\Bundle\CatalogBundle\Entity\Locale;
use Roca\Bundle\NlocaleBundle\Entity\Locale as RocaLocale;
use Pim\Bundle\EnrichBundle\Flash\Message;
use PimEnterprise\Bundle\EnrichBundle\Form\Type\LocaleType;
use Roca\Bundle\NlocaleBundle\Form\Type\LocaleType as RocaLocaleType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Locale controller for configuration
 *
 * @author Nicolas Dupont <nicolas@akeneo.com>
 */
class LocaleController
{
    /** @var FormFactoryInterface */
    protected $formFactory;

    /**
     * @param FormFactoryInterface $formFactory
     */
    public function __construct(FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
    }

    /**
     * Edit a locale
     *
     * @param RocaLocale $locale
     *
     * @Template
     * @AclAncestor("pimee_enrich_locale_edit")
     *
     * @return JsonResponse|array
     */
    public function editAction(Request $request, RocaLocale $locale)
    {
        $form = $this->formFactory->create(RocaLocaleType::class, $locale);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);

            if ($form->isValid()) {

                $request->getSession()->getFlashBag()->add('success', new Message('flash.locale.updated'));
//                Vardumper::dump($form->getData());
                return new JsonResponse(
                    [
                        'route'  => 'pimee_enrich_locale_edit',
                        'params' => ['id' => $locale->getId()],
                    ]
                );
            }
        }

        return [
            'form' => $form->createView()
        ];
    }
}
