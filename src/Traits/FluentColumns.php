<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Traits;

use Webfactor\Laravel\Backpack\FluentSyntax\Columns\ArrayColumn;
use Webfactor\Laravel\Backpack\FluentSyntax\Columns\ArrayCountColumn;
use Webfactor\Laravel\Backpack\FluentSyntax\Columns\BooleanColumn;
use Webfactor\Laravel\Backpack\FluentSyntax\Columns\CheckColumn;
use Webfactor\Laravel\Backpack\FluentSyntax\Columns\DateColumn;
use Webfactor\Laravel\Backpack\FluentSyntax\Columns\DatetimeColumn;
use Webfactor\Laravel\Backpack\FluentSyntax\Columns\ImageColumn;
use Webfactor\Laravel\Backpack\FluentSyntax\Columns\ModelFunctionAttributeColumn;
use Webfactor\Laravel\Backpack\FluentSyntax\Columns\ModelFunctionColumn;
use Webfactor\Laravel\Backpack\FluentSyntax\Columns\NumberColumn;
use Webfactor\Laravel\Backpack\FluentSyntax\Columns\RadioColumn;
use Webfactor\Laravel\Backpack\FluentSyntax\Columns\SelectColumn;
use Webfactor\Laravel\Backpack\FluentSyntax\Columns\SelectMultipleColumn;
use Webfactor\Laravel\Backpack\FluentSyntax\Columns\TextColumn;
use Webfactor\Laravel\Backpack\FluentSyntax\Columns\ViewColumn;
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

    /*
    |--------------------------------------------------------------------------
    | Definition of all Column Types
    |--------------------------------------------------------------------------
    */

    public function arrayColumn(string $name): ArrayColumn
    {
        return new ArrayColumn($name);
    }

    public function arrayCountColumn(string $name): ArrayCountColumn
    {
        return new ArrayCountColumn($name);
    }

    public function booleanColumn(string $name): BooleanColumn
    {
        return new BooleanColumn($name);
    }

    public function checkColumn(string $name): CheckColumn
    {
        return new CheckColumn($name);
    }

    public function dateColumn(string $name): DateColumn
    {
        return new DateColumn($name);
    }

    public function DatetimeColumn(string $name): DatetimeColumn
    {
        return new DatetimeColumn($name);
    }

    public function imageColumn(string $name): ImageColumn
    {
        return new ImageColumn($name);
    }

    public function modelFunctionColumn(string $name, string $function): ModelFunctionColumn
    {
        return new ModelFunctionColumn($name, $function);
    }

    public function modelFunctionAttributeColumn(string $name, string $function, string $attribute): ModelFunctionAttributeColumn
    {
        return new ModelFunctionAttributeColumn($name, $function, $attribute);
    }

    public function numberColumn(string $name): NumberColumn
    {
        return new NumberColumn($name);
    }

    public function radioColumn(string $name, array $options): RadioColumn
    {
        return new RadioColumn($name, $options);
    }

    public function selectColumn(string $name, string $model, string $relation, string $attribute): SelectColumn
    {
        return new SelectColumn($name, $model, $relation, $attribute);
    }

    public function selectMultipleColumn(string $name, string $model, string $relation, string $attribute): SelectMultipleColumn
    {
        return new SelectMultipleColumn($name, $model, $relation, $attribute);
    }

    public function textColumn(string $name): TextColumn
    {
        return new TextColumn($name);
    }

    public function viewColumn(string $name, string $view): ViewColumn
    {
        return new ViewColumn($name, $view);
    }
}
