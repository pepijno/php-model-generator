<?php

namespace ModelDefinition\Column;

use ModelDefinition\Column\Interfaces\ColumnInterface;

final class Text implements ColumnInterface
{
    private $_name;

    public function __construct(string $name)
    {
        $this->_name = $name;
    }

    public function name() : string
    {
        return $this->_name;
    }
}