<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Columns;

use Webfactor\Laravel\Backpack\FluentSyntax\Contracts\CrudColumnAbstract;

class ArrayColumn extends CrudColumnAbstract
{
    protected $type = 'array';
}
