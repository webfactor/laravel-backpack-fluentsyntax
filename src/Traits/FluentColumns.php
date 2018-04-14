<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Traits;

use Webfactor\Laravel\Backpack\FluentSyntax\Columns\TextColumn;
use Webfactor\Laravel\Backpack\FluentSyntax\Contracts\CrudColumnInterface;

trait FluentColumns
{
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

    public function textColumn(string $name): TextColumn
    {
        return new TextColumn($name);
    }
}
