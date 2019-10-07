<?php

declare(strict_types=1);

namespace Src;

use Src\Template;

class TemplateFactory
{
    /** @var string テンプレートのベースディレクトリ */
    private $base_dir;

    /**
     * @param string $base_dir テンプレートのベースディレクトリ
     */
    public function __construct(string $base_dir)
    {
        $this->base_dir = rtrim($base_dir, '\\/');
    }

    /**
     * @param string $name
     * @param array $params
     * @return Template
     */
    public function create(string $name, array $params): Template
    {
        return new Template(
            "{$this->base_dir}/_base.phtml",
            [
                'main' => "{$this->base_dir}/{$name}.phtml"
            ] + $params
        );
    }
}
