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

    /**
     * Set options for the fields
     * @param  array  $options array of option
     * @return mixed
     */
    public function options(array $options)
    {
      $this->options['options'] = $options;

      return $this;
    }

    /**
     * Add option to a field that is already set
     * @param string $value text that is shown to the user
     * @param null|string $key   the value of the new text
     */
    public function addOption($value, $key = null)
    {
      if(is_null($key)) {
        $this->options['options'][] = $value;
      } else {
        $this->options['options'][$key] = $value;
      }

      return $this;
    }

}
