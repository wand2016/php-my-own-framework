<?php

declare(strict_types=1);

namespace Tests;

require __DIR__ . '/../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Src\Template;
use Src\TemplateFactory;

class TemplateFactoryTest extends TestCase
{
    /**
     * @test
     */
    public function create_Templateを適切に構築できる()
    {
        $base_dir = __DIR__ . '/view/';
        $params = ['name' => 'D.Horiyama'];

        $sut = new TemplateFactory($base_dir);

        $templateInstance = $sut->create('index', $params);

        $this->assertEquals(
            new Template(__DIR__ . '/view/index.phtml', $params),
            $templateInstance
        );
    }
}
