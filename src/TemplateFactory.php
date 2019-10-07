<?php

declare(strict_types=1);

namespace Src;

class TemplateFactory
{
    /** @var string テンプレートのベースディレクトリ */
    private $base_dir;

    /**
     * @param string  $base_dir
     */
    public function __construct(string  $base_dir)
    {
        $this->base_dir = rtrim($base_dir, '\\/');
    }

    /**
     * @param string $name
     * @return Template
     */
    public function create(string $name)
    {
        return new Template("{$this->base_dir}/{$name}.phtml");
    }
}
