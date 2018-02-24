<?php

namespace ModelDefinition\Column\Decorators;

use ModelDefinition\Column\ColumnInterface;

final class Primary implements ColumnInterface
{
    private $_column;

    public function __construct(ColumnInterface $column)
    {
        $this->_column = $column;
    }

    public function name() : string
    {
        return $this->_column->name();
    }
}
