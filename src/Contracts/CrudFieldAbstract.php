<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Contracts;

abstract class CrudFieldAbstract extends CrudAbstract implements CrudFieldInterface
{
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
