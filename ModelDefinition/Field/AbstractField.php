<?php

namespace ModelDefinition\Field;

use ModelDefinition\Field\Interfaces\FieldInterface;
use ModelDefinition\Field\Interfaces\DefaultsToInterface;
use ModelDefinition\Field\Interfaces\NullableInterface;
use ModelDefinition\Field\Interfaces\PrimaryInterface;
use ModelDefinition\Field\Decorators\Primary;
use ModelDefinition\Field\Decorators\Nullable;
use ModelDefinition\Field\Decorators\DefaultValue;

abstract class AbstractField implements FieldInterface,
                                        DefaultsToInterface,
                                        NullableInterface,
                                        PrimaryInterface
{
    private $_name;

    public function __construct($name)
    {
        $this->_name = $name;
    }

    public function name() : string
    {
        return $this->_name;
    }

    public function primary() : Primary
    {
        return new Primary($this);
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
