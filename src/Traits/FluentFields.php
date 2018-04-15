<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Traits;

use Webfactor\Laravel\Backpack\FluentSyntax\Contracts\CrudFieldInterface;
use Webfactor\Laravel\Backpack\FluentSyntax\Fields\AddressField;
use Webfactor\Laravel\Backpack\FluentSyntax\Fields\CheckboxField;
use Webfactor\Laravel\Backpack\FluentSyntax\Fields\DatePickerField;
use Webfactor\Laravel\Backpack\FluentSyntax\Fields\SummernoteField;
use Webfactor\Laravel\Backpack\FluentSyntax\Fields\TextareaField;
use Webfactor\Laravel\Backpack\FluentSyntax\Fields\TextField;

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

    /*
    |--------------------------------------------------------------------------
    | Definition of all Field Types
    |--------------------------------------------------------------------------
    */

    public function addressField(string $name): AddressField
    {
        return new AddressField($name);
    }

    public function checkboxField(string $name): CheckboxField
    {
        return new CheckboxField($name);
    }

    public function datePickerField(string $name): DatePickerField
    {
        return new DatePickerField($name);
    }

    public function summernoteField(string $name): SummernoteField
    {
        return new SummernoteField($name);
    }

    public function textareaField(string $name): TextareaField
    {
        return new TextareaField($name);
    }

    public function textField(string $name): TextField
    {
        return new TextField($name);
    }
}
