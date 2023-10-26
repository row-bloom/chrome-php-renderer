<?php

use RowBloom\ChromePhpRenderer\ChromePhpRenderer;
use RowBloom\RowBloom\Config;
use RowBloom\RowBloom\Options;
use RowBloom\RowBloom\Types\Css;
use RowBloom\RowBloom\Types\Html;

it('renders and get (basic)')
    ->with([
        'example 1' => [
            'template' => Html::fromString('<h1>Title</h1><p>Bold text</p><div>Normal text</div>'),
            'css' => Css::fromString('p {font-weight: bold;}'),
            'options' => app()->make(Options::class),
            'config' => app()->make(Config::class),
        ],
    ])
    ->expect(function (Html $template, Css $css, Options $options, Config $config) {
        return app()->make(ChromePhpRenderer::class)
            ->render($template, $css, $options, $config)->get();
    })
    // ? more assertions
    ->toBeString();
