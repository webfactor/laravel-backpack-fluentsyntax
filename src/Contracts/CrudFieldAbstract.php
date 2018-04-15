<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Contracts;

abstract class CrudFieldAbstract extends CrudAbstract implements CrudFieldInterface
{
    /*
    |--------------------------------------------------------------------------
    | Methods available for all Field Types
    |--------------------------------------------------------------------------
    */

    public function fieldAttributes(array $fieldAttributes)
    {
        $this->options['attributes'] = $fieldAttributes;

        return $this;
    }

    public function wrapperAttributes(array $wrapperAttributes)
    {
        $this->options['wrapperAttributes'] = $wrapperAttributes;

        return $this;
    }

    public function addWrapperAttribute(string $key, string $value)
    {
        if ($key == 'class' && isset($this->options['wrapperAttributes']['class'])) {
            $this->options['wrapperAttributes']['class'] .= ' ' . $value;
        } else {
            $this->options['wrapperAttributes'][$key] = $value;
        }

        return $this;
    }

    public function col(string $colWidth)
    {
        $this->addWrapperAttribute('class', 'form-group col-' . $colWidth);

        return $this;
    }
}
