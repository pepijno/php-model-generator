<?php

namespace ModelDefinition\Column\Traits;

use ModelDefinition\Column\Decorators\Nullable;

Trait NullableTrait
{
    public function nullable() : Nullable
    {
        return new Nullable($this);
    }
}