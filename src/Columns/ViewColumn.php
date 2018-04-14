<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Columns;

use Webfactor\Laravel\Backpack\FluentSyntax\Contracts\CrudColumnAbstract;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Prefixable;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Relationable;

class ViewColumn extends CrudColumnAbstract
{
    protected $type = 'view';

    public function __construct(string $name, string $view)
    {
        parent::__construct($name);

        $this->options['view'] = $view;
    }
}
