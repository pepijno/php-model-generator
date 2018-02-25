<?php

namespace ModelDefinition\Field\Interfaces;

use ModelDefinition\Field\Decorators\DefaultValue;

interface DefaultsToInterface
{
    public function defaultsTo($value) : DefaultValue;
}