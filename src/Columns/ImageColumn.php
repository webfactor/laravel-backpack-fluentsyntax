<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Columns;

use Webfactor\Laravel\Backpack\FluentSyntax\Contracts\CrudColumnAbstract;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Prefixable;

class ImageColumn extends CrudColumnAbstract
{
    use Prefixable;

    protected $type = 'image';

    public function width(string $width)
    {
        $this->options['width'] = $width;

        return $this;
    }

    public function height(string $height)
    {
        $this->options['height'] = $height;

        return $this;
    }
}
