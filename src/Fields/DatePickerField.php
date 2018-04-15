<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Fields;

use Webfactor\Laravel\Backpack\FluentSyntax\Contracts\CrudFieldAbstract;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Defaultable;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Hintable;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Prefixable;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Suffixable;

class DatePickerField extends CrudFieldAbstract
{
    use Hintable, Defaultable;

    protected $type = 'date_picker';

    public function todayButton(bool $button = true)
    {
        $this->options['date_picker_options']['todayBtn'] = $button;

        return $this;
    }

    public function format(string $format)
    {
        $this->options['date_picker_options']['format'] = $format;

        return $this;
    }

    public function language(string $language)
    {
        $this->options['date_picker_options']['language'] = $language;

        return $this;
    }
}
