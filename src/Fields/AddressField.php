<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Fields;

use Webfactor\Laravel\Backpack\FluentSyntax\Contracts\CrudFieldAbstract;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Hintable;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Prefixable;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Suffixable;

class AddressField extends CrudFieldAbstract
{
    use Prefixable, Suffixable, Hintable;

    protected $type = 'address';

    public function toJson()
    {
        $this->options['store_as_json'] = true;

        return $this;
    }
}
