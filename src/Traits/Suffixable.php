<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Traits;

trait Suffixable
{
    public function suffix(string $suffix)
    {
        $this->options['suffix'] = $suffix;

        return $this;
    }
}
