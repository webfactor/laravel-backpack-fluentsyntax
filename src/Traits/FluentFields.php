<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Traits;

use Webfactor\Laravel\Backpack\FluentSyntax\Contracts\CrudFieldInterface;

trait FluentFields
{
    /*
    |--------------------------------------------------------------------------
    | Methods for providing Fluent Fields
    |--------------------------------------------------------------------------
    */

    public function addFields(array $fields)
    {
        foreach ($fields as $field) {
            $this->addField($field);
        }
    }

    public function addField(CrudFieldInterface $field)
    {
        return $this->crud->addField($field->make());
    }
}
