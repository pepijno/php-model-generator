<?php

namespace ModelDefinition\Column;

use ModelDefinition\Column\Interfaces\ColumnInterface;

final class Boolean implements ColumnInterface
{
    private $_name;

    public function __construct(string $name)
    {
        $this->_name = $name;
    }

    public function name()
    {
        return $this->_name;
    }
}
