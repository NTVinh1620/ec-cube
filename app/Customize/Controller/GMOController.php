<?php

namespace Customize\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Customize\Service\SendToApi;

class GMOController extends AbstractController
{
    protected $sendToApi;

    public function __construct(SendToApi $sendToApi)
    {
        $this->sendToApi = $sendToApi;
    }

    /**
     * @Route("/linkTypePlus", name="app_link_type_plus")
     */
    public function linkTypePlus(): Response
    {
        $url = 'https://kt01.mul-pay.jp/payment/GetLinkplusUrlPayment.json';

        $data = [
            'json' => [
                'geturlparam' => [
                    'ShopID' => 'tshop00059238',
                    'ShopPass' => '5hvr5p6g',
                    'GuideMailSendFlag' => '0',
                    'SendMailAddress' => 'rukitori1620@gmail.com',
                    'CustomerName' => 'サンプル　太郎',
                    'TemplateNo' => '1',
                ],
                'configid' => '002',
                'transaction' => [
                    'OrderID' => '199',
                    'Amount' => '100',
                    'Tax' => '10',
                    "PayMethods" => [
                        "credit"
                    ]
                ],
                'credit' => [
                    'JobCd' => 'CAPTURE',
                    "Method" => "1",
                    "TdFlag" => "1",
                    "Tds2Type" => "1",
                    "MemberID" => "1234567"
                ]
            ],
        ];

        $content = $this->sendToApi->fetchLinkTypePlus($url, $data);

        if (isset($content['error'])) {
            return new Response($content['error']);
        } else {
            $linkUrl = $content['LinkUrl'];
            return $this->redirect($linkUrl);
        }
    }

    /**
     * @Route("/creditCardRegis", name="app_credit_card_regis")
     */
    public function creditCardRegis(): Response
    {
        $url = 'https://kt01.mul-pay.jp/payment/EntryTran.json';

        $ORDER_ID = '210';

        $data = [
            'json' => [
                'shopID' => 'tshop00059238',
                'shopPass' => '5hvr5p6g',
                'orderID' => $ORDER_ID,
                'jobCd' => 'CAPTURE',
                'amount' => '1000'
            ],
        ];

        $content = $this->sendToApi->fetchLinkTypePlus($url, $data);

        if (isset($content['error'])) {
            return new Response($content['error']);
        } else {
            $orderId = $ORDER_ID;
            $accessID = $content['accessID'];
            $accessPass = $content['accessPass'];
            return $this->redirectToRoute('app_credit_card_exec', ['orderId' => $orderId, 'accessID' => $accessID, 'accessPass' => $accessPass]);
        }
    }

    /**
     * @Route("/creditCardExec", name="app_credit_card_exec")
     */
    public function creditCardExec(Request $request): Response
    {
        $accessID = $request->query->get('accessID');
        $accessPass = $request->query->get('accessPass');
        $orderId = $request->query->get('orderId');
        $url = 'https://kt01.mul-pay.jp/payment/ExecTran.json';

        // Use token (get from google pay)
        $dataToken = [
            'json' => [
                "accessID" => $accessID,
                "accessPass" => $accessPass,
                "orderID" => $orderId,
                "method" => "1",
                "tokenType" => 2,
                "token" => "ew0KICJ2ZXJzaW9uIjoiR21vTW9jayIsDQogInByb3RvY29sVmVyc2lvbiI6IkVDdjEiLA0KICJzaWduYXR1cmUiOiJNRVFDSUR4Qm9VQ29GUkdSZUxkWi9jQUJsU1NSSUtvT0VGb1UzZTI3YzE0dk1adGZBaUJ0WDNwR01FcG53Nm1TQWJuYWdDQ2dIbENrM05jRndXWUV5eElFNktHWlZBdTAwM2R1MDAzZCIsDQogInNpZ25lZE1lc3NhZ2UiOiJ7XCJlbmNyeXB0ZWRNZXNzYWdlXCI6XCJldzBLSUNBaWNHRjViV1Z1ZEUxbGRHaHZaQ0k2SWtOQlVrUWlMQTBLSUNBaWNHRjViV1Z1ZEUxbGRHaHZaRVJsZEdGcGJITWlPbnNOQ2lBZ0lDQWljR0Z1SWpvaU5ERXhNVEV4TVRFeE1URXhNVEV4TVNJc0RRb2dJQ0FnSW1WNGNHbHlZWFJwYjI1TmIyNTBhQ0k2TVRJc0RRb2dJQ0FnSW1WNGNHbHlZWFJwYjI1WlpXRnlJam95TURVd0RRb2dJSDBzRFFvZ0lDSm5ZWFJsZDJGNVRXVnlZMmhoYm5SSlpDSTZJbk52YldVdGJXVnlZMmhoYm5RdGFXUWlMQTBLSUNBaWJXVnpjMkZuWlVsa0lqb2ljMjl0WlMxdFpYTnpZV2RsTFdsa0lpd05DaUFnSW0xbGMzTmhaMlZGZUhCcGNtRjBhVzl1SWpvaU1qVTFOakV4TVRVNU9UQXdNQ0lOQ24wPVwiLFwiZXBoZW1lcmFsUHVibGljS2V5XCI6XCJCUGhWc3BuNzBaajJLa2d1OXQ4K0FwRXVVV3NJL3pvczV3aEdDUUJsZ09rdVlhZ09pczdxc3JjYlFyY3ByanZUWk8zWE9VK1FiY2MyOEZTZ3NSdGNnUUV1MDAzZFwiLFwidGFnXCI6XCJaVndsSnQ3ZFU4UGxrMCtyOHJQRjhEbVBUdkRpT0ExVUFvTmpEVitTcURFdTAwM2RcIn0iDQp9"
            ],
        ];

        // Use card number
        $dataNumber = [
            'json' => [
                "accessID" => $accessID,
                "accessPass" => $accessPass,
                "orderID" => $orderId,
                "method" => "1",
                "cardNo" => "4111111111111111",
                "expire" => "2512"
            ],
        ];

        $content = $this->sendToApi->fetchLinkTypePlus($url, $dataNumber);

        if (isset($content['error'])) {
            return new Response($content['error']);
        } else {
            return $this->redirectToRoute('homepage');
        }
    }
}
