<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Traits;

trait Prefixable
{
    public function prefix(string $prefix)
    {
        $this->options['prefix'] = $prefix;

        return $this;
    }
}
