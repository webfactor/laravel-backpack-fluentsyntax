<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Columns;

use Webfactor\Laravel\Backpack\FluentSyntax\Contracts\CrudColumnAbstract;

class TextColumn extends CrudColumnAbstract
{
    protected $type = 'text';
}
