<?php

namespace ModelDefinition\Column\Decorators;

use ModelDefinition\Column\Interfaces\ColumnInterface;

final class DefaultValue implements ColumnInterface
{
    private $_column;
    private $_defaultValue;

    public function __construct(ColumnInterface $column, $defaultValue)
    {
        $this->_column = $column;
        $this->_defaultValue = $defaultValue;
    }

    public function name()
    {
        return $this->_column->name();
    }
}
