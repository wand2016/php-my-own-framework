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
        $params = [
            'title' => 'hoge',
            'name' => 'D.Horiyama'
        ];

        $sut = new TemplateFactory($base_dir);

        $templateInstance = $sut->create(
            'index',
            [
                'title' => 'hoge',
                'name' => 'D.Horiyama'
            ]
        );

        $this->assertEquals(
            new Template(
                __DIR__ . '/view/_base.phtml',
                [
                    'main' => __DIR__ . '/view/index.phtml',
                    'title' => 'hoge',
                    'name' => 'D.Horiyama'
                ]
            ),
            $templateInstance
        );
    }
}
