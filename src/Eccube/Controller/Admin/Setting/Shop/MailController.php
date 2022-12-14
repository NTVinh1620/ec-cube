<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eccube\Controller\Admin\Setting\Shop;

use Eccube\Controller\AbstractController;
use Eccube\Entity\MailTemplate;
use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
use Eccube\Form\Type\Admin\MailType;
use Eccube\Repository\MailTemplateRepository;
use Eccube\Util\CacheUtil;
use Eccube\Util\StringUtil;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

/**
 * Class MailController
 */
class MailController extends AbstractController
{
    /**
     * @var MailTemplateRepository
     */
    protected $mailTemplateRepository;

    /**
     * MailController constructor.
     *
     * @param MailTemplateRepository $mailTemplateRepository
     */
    public function __construct(MailTemplateRepository $mailTemplateRepository)
    {
        $this->mailTemplateRepository = $mailTemplateRepository;
    }

    /**
     * @Route("/%eccube_admin_route%/setting/shop/mail", name="admin_setting_shop_mail", methods={"GET", "POST"})
     * @Route("/%eccube_admin_route%/setting/shop/mail/{id}", requirements={"id" = "\d+"}, name="admin_setting_shop_mail_edit", methods={"GET", "POST"})
     * @Template("@admin/Setting/Shop/mail.twig")
     */
    public function index(Request $request, Environment $twig, CacheUtil $cacheUtil, MailTemplate $Mail = null)
    {
        $builder = $this->formFactory
            ->createBuilder(MailType::class, $Mail);

        $event = new EventArgs(
            [
                'builder' => $builder,
                'Mail' => $Mail,
            ],
            $request
        );
        $this->eventDispatcher->dispatch($event, EccubeEvents::ADMIN_SETTING_SHOP_MAIL_INDEX_INITIALIZE);

        $form = $builder->getForm();
        $form['template']->setData($Mail);
        $htmlFileName = $Mail ? $this->getHtmlFileName($Mail->getFileName()) : null;

        // ?????????
        if (!is_null($Mail)) {
            // ???????????????????????????????????????
            $source = $twig->getLoader()
                ->getSourceContext($Mail->getFileName())
                ->getCode();

            $form->get('tpl_data')->setData($source);
            if ($twig->getLoader()->exists($htmlFileName)) {
                $source = $twig->getLoader()
                    ->getSourceContext($htmlFileName)
                    ->getCode();

                $form->get('html_tpl_data')->setData($source);
            }
        }

        if ('POST' === $request->getMethod()) {
            $form->handleRequest($request);

            // ????????????????????????????????????????????????.
            if (is_null($Mail)) {
                $this->addError('admin.common.save_error', 'admin');

                return $this->redirectToRoute('admin_setting_shop_mail');
            }

            if ($form->isValid()) {
                $this->entityManager->flush();

                // ???????????????????????????
                $templatePath = $this->getParameter('eccube_theme_front_dir');
                $filePath = $templatePath.'/'.$Mail->getFileName();

                $fs = new Filesystem();
                $mailData = $form->get('tpl_data')->getData();
                $mailData = StringUtil::convertLineFeed($mailData);
                $fs->dumpFile($filePath, $mailData);

                // HTML???????????????
                $htmlMailData = $form->get('html_tpl_data')->getData();
                if (!is_null($htmlMailData)) {
                    $htmlMailData = StringUtil::convertLineFeed($htmlMailData);
                    $fs->dumpFile($templatePath.'/'.$htmlFileName, $htmlMailData);
                }

                $event = new EventArgs(
                    [
                        'form' => $form,
                        'Mail' => $Mail,
                        'templatePath' => $templatePath,
                        'filePath' => $filePath,
                    ],
                    $request
                );
                $this->eventDispatcher->dispatch($event, EccubeEvents::ADMIN_SETTING_SHOP_MAIL_INDEX_COMPLETE);

                $this->addSuccess('admin.common.save_complete', 'admin');

                // ????????????????????????
                $cacheUtil->clearTwigCache();

                return $this->redirectToRoute('admin_setting_shop_mail_edit', ['id' => $Mail->getId()]);
            }
        }

        return [
            'form' => $form->createView(),
            'id' => is_null($Mail) ? null : $Mail->getId(),
        ];
    }

    /**
     * @Route("/%eccube_admin_route%/setting/shop/mail/preview", name="admin_setting_shop_mail_preview", methods={"POST"})
     * @Template("@admin/Setting/Shop/mail_view.twig")
     */
    public function preview(Request $request)
    {
        if (!$request->isXmlHttpRequest() && $this->isTokenValid()) {
            throw new BadRequestHttpException();
        }

        $html_body = $request->get('html_body');

        $event = new EventArgs(
            [
                'html_body' => $html_body,
            ],
            $request
        );
        $this->eventDispatcher->dispatch($event, EccubeEvents::ADMIN_SETTING_SHOP_MAIL_PREVIEW_COMPLETE);

        return [
            'html_body' => $html_body,
        ];
    }

    /**
     * HTML???????????????????????????????????????
     *
     * @param  string $fileName
     *
     * @return string
     */
    protected function getHtmlFileName($fileName)
    {
        // HTML???????????????????????????????????????
        $targetTemplate = pathinfo($fileName);
        $suffix = '.html';

        return $targetTemplate['dirname'].DIRECTORY_SEPARATOR.$targetTemplate['filename'].$suffix.'.'.$targetTemplate['extension'];
    }
}
