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
    public function テンプレートが適切に描画される()
    {
        $file = __DIR__ . '/view/index.phtml';
        $params = ['name' => 'D.Horiyama'];

        $sut = new Template($file, $params);

        $this->assertSame(
            'my name is D.Horiyama',
            $sut . ''
        );
    }
}
