<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Columns;

use Webfactor\Laravel\Backpack\FluentSyntax\Contracts\CrudColumnAbstract;

class DatetimeColumn extends CrudColumnAbstract
{
    protected $type = 'datetime';
}
