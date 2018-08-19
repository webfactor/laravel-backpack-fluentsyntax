<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Fields;

use Webfactor\Laravel\Backpack\FluentSyntax\Contracts\CrudFieldAbstract;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Defaultable;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Prefixable;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Suffixable;

class RadioField extends CrudFieldAbstract
{
    use Hintable, Defaultable;

    protected $type = 'radio';

    public function options(array $options)
    {
      $this->options['options'] = $options;

      return $this;
    }

    public function addOption($value, $key)
    {
      if(is_null($key)) {
        $this->options['options'][] = $value;
      } else {
        $this->options['options'][$key] = $value;
      }

      return $this;
    }

}
