<?php

declare(strict_types=1);

namespace Tests;

require __DIR__ . '/../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Src\TemplateFactory;

class TemplateFactoryTest extends TestCase
{
    /**
     * @test
     */
    public function something_is_something()
    {
        $base_dir = 'path/to/dir';

        $sut = new TemplateFactory($base_dir);

        $this->assertTrue(true);
    }
}
