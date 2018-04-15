<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Fields;

use Webfactor\Laravel\Backpack\FluentSyntax\Contracts\CrudFieldAbstract;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Defaultable;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Hintable;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Prefixable;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Suffixable;

class NumberField extends CrudFieldAbstract
{
    use Prefixable, Suffixable, Hintable, Defaultable;

    protected $type = 'number';

    public function allowDecimals()
    {
        $this->options['attributes']['step'] = 'any';

        return $this;
    }

    public function steps(int $steps)
    {
        $this->options['attributes']['step'] = $steps;

        return $this;
    }
}
