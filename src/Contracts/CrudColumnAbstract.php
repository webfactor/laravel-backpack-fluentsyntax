<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Contracts;

abstract class CrudColumnAbstract extends CrudAbstract implements CrudColumnInterface
{
    /*
    |--------------------------------------------------------------------------
    | Methods available for all Column Types
    |--------------------------------------------------------------------------
    */

    public function limit(int $limit = 50)
    {
        $this->options['limit'] = $limit;

        return $this;
    }
}
