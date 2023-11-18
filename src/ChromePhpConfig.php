<?php

namespace RowBloom\ChromePhpRenderer;

class ChromePhpConfig
{
    public function __construct(
        public ?string $chromePath = null,
        public bool $mergeGlobalCss = true,
    ) {
    }
}
