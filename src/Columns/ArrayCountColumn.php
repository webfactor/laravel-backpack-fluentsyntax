<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Columns;

use Webfactor\Laravel\Backpack\FluentSyntax\Contracts\CrudColumnAbstract;

class ArrayCountColumn extends CrudColumnAbstract
{
    protected $type = 'array_count';
}
