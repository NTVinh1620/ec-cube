<?php

namespace Customize\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class SendToApi
{
    /**
     * @var HttpClientInterface
     */
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function fetchLinkTypePlus($url, $data): array
    {
        $response = $this->client->request(
            'POST',
            $url,
            $data
        );

        $statusCode = $response->getStatusCode();

        $content = [];

        if ($statusCode == 200) {
            $content = $response->getContent(false);
            $content = $response->toArray(false);
        } else {
            $content['error'] = 'Error has occurred';
        }

        return $content;
    }
}
