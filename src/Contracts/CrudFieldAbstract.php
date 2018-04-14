<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Contracts;

abstract class CrudFieldAbstract extends CrudAbstract implements CrudFieldInterface
{
    /*
    |--------------------------------------------------------------------------
    | Methods available for all Field Types
    |--------------------------------------------------------------------------
    */

    public function prefix(string $prefix)
    {
        $this->options['prefix'] = $prefix;

        return $this;
    }

    public function suffix(string $suffix)
    {
        $this->options['suffix'] = $suffix;

        return $this;
    }

    public function default(string $default)
    {
        $this->options['default'] = $default;

        return $this;
    }

    public function hint(string $hint)
    {
        $this->options['hint'] = $hint;

        return $this;
    }
}
