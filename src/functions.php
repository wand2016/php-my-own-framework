<?php

declare(strict_types=1);

/**
 * a wrapper of htmlspecialchars.
 * @param string $stringRaw
 * @return string an escaped string
 */
function h(string $stringRaw): string
{
    return htmlspecialchars($stringRaw, ENT_QUOTES, 'UTF-8');
}
