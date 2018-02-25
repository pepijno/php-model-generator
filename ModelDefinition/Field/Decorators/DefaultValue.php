<?php

namespace ModelDefinition\Field\Decorators;

use ModelDefinition\Field\Interfaces\FieldInterface;
use ModelDefinition\Field\Interfaces\NullableInterface;
use ModelDefinition\Field\Interfaces\PrimaryInterface;
use ModelDefinition\Field\Decorators\Nullable;
use ModelDefinition\Field\Decorators\Primary;

final class DefaultValue implements FieldInterface,
                                    NullableInterface,
                                    PrimaryInterface
{
    private $_field;
    private $_defaultValue;

    public function __construct(FieldInterface $field, $defaultValue)
    {
        $this->_field = $field;
        $this->_defaultValue = $defaultValue;
    }

    public function name() : string
    {
        return $this->_field->name();
    }

    public function nullable() : Nullable
    {
        return new Nullable($this);
    }

    public function primary() : Primary
    {
        return new Primary($this);
    }
}
