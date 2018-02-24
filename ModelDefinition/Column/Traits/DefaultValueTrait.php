<?php

namespace ModelDefinition\Column\Traits;

use ModelDefinition\Column\Decorators\DefaultValue;

Trait DefaultValueTrait
{
    public function defaultsTo($value) : DefaultValue
    {
        return new DefaultValue($this, $value);
    }
}
