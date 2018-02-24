<?php

namespace ModelDefinition\Column\Decorators;

use ModelDefinition\Column\Interfaces\ColumnInterface;
use ModelDefinition\Column\Traits\PrimaryTrait;
use ModelDefinition\Column\Traits\DefaultValueTrait;

final class Nullable implements ColumnInterface
{
    use PrimaryTrait;
    use DefaultValueTrait;

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
