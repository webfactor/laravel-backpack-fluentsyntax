<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Columns;

use Webfactor\Laravel\Backpack\FluentSyntax\Contracts\CrudColumnAbstract;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Prefixable;

class RadioColumn extends CrudColumnAbstract
{
    protected $type = 'radio';

    public function __construct(string $name, array $options)
    {
        parent::__construct($name);

        $this->options['options'] = $options;
    }
}
