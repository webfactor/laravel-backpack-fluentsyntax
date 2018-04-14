<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Traits;

use Webfactor\Laravel\Backpack\FluentSyntax\Contracts\CrudFieldInterface;
use Webfactor\Laravel\Backpack\FluentSyntax\Fields\TextField;

trait FluentFields
{
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

    public function textField(string $name): TextField
    {
        return new TextField($name);
    }
}
