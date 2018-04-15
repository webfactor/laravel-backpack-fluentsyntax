<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Traits;

trait Defaultable
{
    public function default(string $default)
    {
        $this->options['default'] = $default;

        return $this;
    }
}
