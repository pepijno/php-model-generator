<?php

namespace ModelDefinition\Column;

use ModelDefinition\Column\ColumnInterface;

final class Nullable implements ColumnInterface
{
    private $_column;

    public function __construct(ColumnInterface $column)
    {
        $this->_column = $column;
    }

    public function name() : string
    {
        $this->_column->name();
    }
}
