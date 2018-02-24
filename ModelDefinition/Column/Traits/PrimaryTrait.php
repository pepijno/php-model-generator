<?php

namespace ModelDefinition\Column\Traits;

use ModelDefinition\Column\Decorators\Primary;

Trait PrimaryTrait
{
    public function primary() : Primary
    {
        return new Primary($this);
    }
}