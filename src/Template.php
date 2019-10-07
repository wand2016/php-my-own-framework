<?php

declare(strict_types=1);

namespace Src;

class Template
{
    /** @var string ファイルパス*/
    private $file;

    /** @var array テンプレートで表示するための変数を保持した配列 */
    private $params;

    /**
     * @param string $file ファイルパス
     * @param array $params テンプレートで表示するための変数を保持した配列
     */
    public function __construct(string $file, array $params)
    {
        $this->file = $file;
        $this->params = $params;
    }

    /**
     *
     */
    public function render(): void
    {
        extract($this->params);
        include $this->file;
    }

    /**
     * magic methoc
     * @return string
     */
    function __toString(): string
    {
        ob_start();
        $this->render();
        return ob_get_clean();
    }
}
