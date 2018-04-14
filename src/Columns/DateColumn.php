<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Columns;

use Webfactor\Laravel\Backpack\FluentSyntax\Contracts\CrudColumnAbstract;

class DateColumn extends CrudColumnAbstract
{
    protected $type = 'date';
}
