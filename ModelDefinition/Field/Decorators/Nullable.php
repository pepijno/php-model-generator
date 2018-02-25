<?php

namespace ModelDefinition\Field\Decorators;

use ModelDefinition\Field\Interfaces\FieldInterface;
use ModelDefinition\Field\Interfaces\PrimaryInterface;
use ModelDefinition\Field\Interfaces\DefaultsToInterface;
use ModelDefinition\Field\Decorators\Primary;
use ModelDefinition\Field\Decorators\DefaultValue;

final class Nullable implements FieldInterface,
                                PrimaryInterface,
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

    public function primary() : Primary
    {
        return new Primary($this);
    }

    public function defaultsTo($value) : DefaultValue
    {
        return new DefaultValue($this, $value);
    }
}
