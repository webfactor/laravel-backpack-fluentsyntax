<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Fields;

use Webfactor\Laravel\Backpack\FluentSyntax\Contracts\CrudFieldAbstract;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Defaultable;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Hintable;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Prefixable;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Suffixable;

class ImageField extends CrudFieldAbstract
{
    use Hintable;

    protected $type = 'image';

    public function crop()
    {
        $this->options['crop'] = true;

        return $this;
    }

    public function ratio(float $ratio = 1)
    {
        $this->options['aspect_ratio'] = $ratio;

        return $this;
    }

    public function disk(string $disk)
    {
        $this->options['disk'] = $disk;

        return $this;
    }

    public function prefix(string $path)
    {
        $this->options['prefix'] = $path;

        return $this;
    }
}
