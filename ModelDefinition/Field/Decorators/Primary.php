<?php

namespace ModelDefinition\Field\Decorators;

use ModelDefinition\Field\Interfaces\FieldInterface;
use ModelDefinition\Field\Interfaces\NullableInterface;
use ModelDefinition\Field\Interfaces\DefaultsToInterface;
use ModelDefinition\Field\Decorators\Nullable;
use ModelDefinition\Field\Decorators\DefaultValue;

final class Primary implements FieldInterface,
                               NullableInterface,
                               DefaultsToInterface
{
    private $_field;

    public function __construct(FieldInterface $field)
    {
        $this->_field = $field;
    }

    public function name() : string
    {
        return $this->_field->name();
    }

    public function nullable() : Nullable
    {
        return new Nullable($this);
    }

    public function defaultsTo($value) : DefaultValue
    {
        return new DefaultValue($this, $value);
    }
}
