<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Traits;

trait Limitable
{
    public function limit(int $limit = 50)
    {
        $this->options['limit'] = $limit;

        return $this;
    }
}
