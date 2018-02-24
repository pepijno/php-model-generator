<?php

namespace ModelDefinition\Column\Decorators;

use ModelDefinition\Column\Interfaces\ColumnInterface;
use ModelDefinition\Column\Traits\NullableTrait;
use ModelDefinition\Column\Traits\PrimaryTrait;

final class DefaultValue implements ColumnInterface
{
    use NullableTrait;
    use PrimaryTrait;

    private $_column;
    private $_defaultValue;

    public function __construct(ColumnInterface $column, $defaultValue)
    {
        $this->_column = $column;
        $this->_defaultValue = $defaultValue;
    }

    public function name() : string
    {
        return $this->_column->name();
    }
}
