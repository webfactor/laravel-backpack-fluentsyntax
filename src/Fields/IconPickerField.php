<?php

namespace Webfactor\Laravel\Backpack\FluentSyntax\Fields;

use Webfactor\Laravel\Backpack\FluentSyntax\Contracts\CrudFieldAbstract;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Defaultable;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Hintable;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Prefixable;
use Webfactor\Laravel\Backpack\FluentSyntax\Traits\Suffixable;

class IconPickerField extends CrudFieldAbstract
{
    use Hintable, Defaultable;

    protected $type = 'icon_picker';

    public function iconset(string $iconset)
    {
        $this->options['iconset'] = $iconset;
    }

    public function fontawesome()
    {
        $this->iconset('fontawesome');

        return $this;
    }

    public function glyphicon()
    {
        $this->iconset('glyphicon');

        return $this;
    }

    public function ionicon()
    {
        $this->iconset('ionicon');

        return $this;
    }

    public function weathericon()
    {
        $this->iconset('weathericon');

        return $this;
    }

    public function mapicon()
    {
        $this->iconset('mapicon');

        return $this;
    }

    public function octicon()
    {
        $this->iconset('octicon');

        return $this;
    }

    public function typicon()
    {
        $this->iconset('typicon');

        return $this;
    }

    public function elusiveicon()
    {
        $this->iconset('elusiveicon');

        return $this;
    }

    public function materialdesign()
    {
        $this->iconset('materialdesign');

        return $this;
    }
}
