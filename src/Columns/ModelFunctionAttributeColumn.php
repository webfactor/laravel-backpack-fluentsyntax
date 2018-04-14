<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Columns;

use Webfactor\Laravel\Backpack\FluentSyntax\Contracts\CrudColumnAbstract;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Limitable;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Prefixable;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Relationable;

class ModelFunctionAttributeColumn extends CrudColumnAbstract
{
    use Limitable;

    protected $type = 'model_function_attribute';

    public function __construct(string $name, string $function, string $attribute)
    {
        parent::__construct($name);

        $this->options['function_name'] = $function;
        $this->options['attribute'] = $attribute;
    }
}
