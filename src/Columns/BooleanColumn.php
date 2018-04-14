<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Columns;

use Webfactor\Laravel\Backpack\FluentSyntax\Contracts\CrudColumnAbstract;

class BooleanColumn extends CrudColumnAbstract
{
    protected $type = 'boolean';

    public function options(array $options)
    {
        $this->options['options'] = $options;

        return $this;
    }
}
