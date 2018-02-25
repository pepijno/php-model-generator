<?php

namespace ModelDefinition\Field\Interfaces;

use ModelDefinition\Field\Decorators\Nullable;

interface NullableInterface
{
    public function nullable() : Nullable;
}