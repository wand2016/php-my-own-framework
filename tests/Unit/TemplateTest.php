<?php

declare(strict_types=1);

namespace Tests;

require __DIR__ . '/../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Src\Template;

class TemplateTest extends TestCase
{
    /**
     * @test
     */
    public function something_is_something()
    {
        $file = 'hoge';
        $params = [];

        $sut = new Template($file, $params);

        $this->assertTrue(true);
    }
}
