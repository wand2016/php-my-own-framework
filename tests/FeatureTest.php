<?php

declare(strict_types=1);

namespace Tests;

require __DIR__ . '/../vendor/autoload.php';


use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

class FeatureTest extends TestCase
{
    /** @var Client */
    private $httpClient;

    public function setUp(): void
    {
        parent::setUp();

        $this->httpClient = new Client([
            'base_uri' => 'http://localhost:8080',
            'http_errors' => false
        ]);
    }

    /**
     * @test
     */
    public function rootにGETでアクセスして200OK()
    {
        $this->assertSame(
            200,
            $this->httpClient->get('/')->getStatusCode()
        );
    }

    /**
     * @test
     */
    public function クエリパラメータがあっても20OK()
    {
        $this->assertSame(
            200,
            $this->httpClient->get('/?hogehoge')->getStatusCode()
        );
    }

    /**
     * @test
     */
    public function phpinfo_phpにGETでアクセスして200OK()
    {
        $this->assertSame(
            200,
            $this->httpClient->get('/phpinfo.php')->getStatusCode()
        );
    }

    /**
     * @test
     */
    public function 未定義のrouteにアクセスすると404()
    {
        $this->assertSame(
            404,
            $this->httpClient->get('/undef')->getStatusCode()
        );

    }



}
