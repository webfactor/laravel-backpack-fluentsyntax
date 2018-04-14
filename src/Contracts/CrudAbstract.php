<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Contracts;

class CrudAbstract implements CrudInterface
{
    protected $options = [];

    protected $type = 'text';

    public function __construct(string $name)
    {
        $this->options['name'] = $name;
        $this->options['label'] = $name;
        $this->options['type'] = $this->type;
    }

    public function make(): array
    {
        return $this->options;
    }

    /*
    |--------------------------------------------------------------------------
    | Methods available for all Field and Column Types
    |--------------------------------------------------------------------------
    */

    public function label(string $label)
    {
        $this->options['label'] = $label;

        return $this;
    }
}
