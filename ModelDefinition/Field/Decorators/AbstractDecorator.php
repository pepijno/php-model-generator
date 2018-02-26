<?php

namespace ModelDefinition\Field\Decorators;

use ModelDefinition\Field\Interfaces\FieldInterface;
use ModelDefinition\Field\Interfaces\NullableInterface;
use ModelDefinition\Field\Interfaces\DefaultsToInterface;
use ModelDefinition\Field\Interfaces\PrimaryInterface;
use ModelDefinition\Field\Decorators\Nullable;
use ModelDefinition\Field\Decorators\Primary;
use ModelDefinition\Field\Decorators\DefaultValue;

abstract class AbstractDecorator implements FieldInterface,
                                            NullableInterface,
                                            DefaultsToInterface,
                                            PrimaryInterface
{
    private $_field;

    public function __construct(FieldInterface $field)
    {
        return $this->_field = $field;
    }

    public function name() : string
    {
        return $this->_field->name();
    }

    public function defaultsTo($value) : DefaultValue
    {
        return new DefaultValue($this, $value);
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
