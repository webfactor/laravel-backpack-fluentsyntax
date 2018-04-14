<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Columns;

use Webfactor\Laravel\Backpack\FluentSyntax\Contracts\CrudColumnAbstract;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Prefixable;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Relationable;

class SelectMultipleColumn extends CrudColumnAbstract
{
    protected $type = 'select_multiple';

    public function __construct(string $name, string $model, string $relation, string $attribute)
    {
        parent::__construct($name);

        $this->options['model'] = $model;
        $this->options['entity'] = $relation;
        $this->options['attribute'] = $attribute;
    }
}
