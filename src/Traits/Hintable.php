<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Traits;

trait Hintable
{
    public function hint(string $hint)
    {
        $this->options['hint'] = $hint;

        return $this;
    }
}
