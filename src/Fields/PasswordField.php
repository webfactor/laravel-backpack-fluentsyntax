<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Fields;

use Webfactor\Laravel\Backpack\FluentSyntax\Contracts\CrudFieldAbstract;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Defaultable;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Hintable;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Prefixable;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Suffixable;

class PasswordField extends CrudFieldAbstract
{
    use Hintable;

    protected $type = 'password';
}
