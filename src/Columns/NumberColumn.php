<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Columns;

use Webfactor\Laravel\Backpack\FluentSyntax\Contracts\CrudColumnAbstract;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Prefixable;

class NumberColumn extends CrudColumnAbstract
{
    protected $type = 'number';

    public function decimals(int $decimals)
    {
        $this->options['decimals'] = $decimals;

        return $this;
    }
}
