<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Traits;

use Webfactor\Laravel\Backpack\FluentSyntax\Contracts\CrudColumnInterface;

trait FluentColumns
{
    /*
    |--------------------------------------------------------------------------
    | Methods for providing Fluent Columns
    |--------------------------------------------------------------------------
    */

    public function addColumns(array $columns)
    {
        foreach ($columns as $column) {
            $this->addColumn($column);
        }
    }

    public function addColumn(CrudColumnInterface $column)
    {
        return $this->crud->addColumn($column->make());
    }
}
