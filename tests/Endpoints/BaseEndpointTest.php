<?php

namespace Bfg\Wefact\Tests\Endpoints;

use PHPUnit\Framework\TestCase;

abstract class BaseEndpointTest extends TestCase
{
    /** @var \Bfg\Wefact\Client */
    protected $hostFact;

    /** @var \GuzzleHttp\Client */
    protected $httpClient;

    /**
     * @param \GuzzleHttp\Psr7\Response $expectedResponse
     */
    public function mockApiClientResponse(\GuzzleHttp\Psr7\Response $expectedResponse)
    {
        $this->httpClient = $this->createMock(\GuzzleHttp\Client::class);

        $this->hostFact = new \Bfg\Wefact\Client();
        $this->hostFact->setOptions(['base_url' => 'https://www.uwdomein.nl/Pro/apiv2/api.php', 'key' => 'beveiligingscode']);
        $this->hostFact->getHttpClient()->setClient($this->httpClient);

        $this->httpClient->method('request')->willReturnCallback(function ($method, $uri, $options) use ($expectedResponse) {

            return $expectedResponse;
        });
    }
}
