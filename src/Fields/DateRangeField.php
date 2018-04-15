<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Fields;

use Carbon\Carbon;
use Webfactor\Laravel\Backpack\FluentSyntax\Contracts\CrudFieldAbstract;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Defaultable;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Hintable;

class DateRangeField extends CrudFieldAbstract
{
    use Hintable, Defaultable;

    protected $type = 'date_range';

    public function __construct(string $uniqueName, string $startColumn, string $endColumn)
    {
        parent::__construct($uniqueName);

        $this->options['start_name'] = $startColumn;
        $this->options['end_name'] = $endColumn;

        $now = Carbon::now()->toDateTimeString();
        $this->start($now);
        $this->end($now);

        $this->format('DD.MM.YYYY');
    }

    public function start(string $startDefault)
    {
        $this->options['start_default'] = $startDefault;

        return $this;
    }

    public function end(string $endDefault)
    {
        $this->options['end_default'] = $endDefault;

        return $this;
    }

    public function timePicker()
    {
        $this->options['date_range_options']['timePicker'] = true;
        $this->format('DD.MM.YYYY HH:mm');

        return $this;
    }

    public function format(string $format)
    {
        $this->options['date_range_options']['locale']['format'] = $format;

        return $this;
    }
}
