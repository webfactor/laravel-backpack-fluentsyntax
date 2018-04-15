<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Fields;

use Webfactor\Laravel\Backpack\FluentSyntax\Contracts\CrudFieldAbstract;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Defaultable;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Hintable;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Prefixable;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Suffixable;

class DateTimePickerField extends CrudFieldAbstract
{
    use Hintable, Defaultable;

    protected $type = 'datetime_picker';

    public function nullable(bool $nullable = true)
    {
        $this->options['allows_null'] = $nullable;

        return $this;
    }

    public function format(string $format)
    {
        $this->options['datetime_picker_options']['format'] = $format;

        return $this;
    }

    public function language(string $language)
    {
        $this->options['datetime_picker_options']['language'] = $language;

        return $this;
    }
}
