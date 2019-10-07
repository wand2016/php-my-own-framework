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
        $this->assertTrue(true);
        $client = new Client();

        $this->assertSame(
            200,
            $client->get('http://localhost:8080/')->getStatusCode()
        );

    }

}
