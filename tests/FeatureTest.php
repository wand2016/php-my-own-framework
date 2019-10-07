<?php

declare(strict_types=1);

namespace Tests;

require __DIR__ . '/../vendor/autoload.php';


use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

class FeatureTest extends TestCase
{

    /**
     * @test
     */
    public function rootにGETでアクセスして200OK()
    {
        $client = new Client();

        $this->assertSame(
            200,
            $client->get('http://localhost:8080/')->getStatusCode()
        );

    }

    /**
     * @test
     */
    public function クエリパラメータがあっても20OK()
    {
        $client = new Client();

        $this->assertSame(
            200,
            $client->get('http://localhost:8080/?hogehoge')->getStatusCode()
        );

    }

    /**
     * @test
     */
    public function phpinfo_phpにGETでアクセスして200OK()
    {
        $client = new Client();

        $this->assertSame(
            200,
            $client->get('http://localhost:8080/phpinfo.php')->getStatusCode()
        );

    }

    /**
     * @test
     */
    public function 未定義のrouteにアクセスすると404()
    {
        $client = new Client();

        $this->assertSame(
            404,
            $client->get('http://localhost:8080/undef')->getStatusCode()
        );

    }



}
