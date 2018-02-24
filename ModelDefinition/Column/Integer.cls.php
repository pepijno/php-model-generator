<?php

namespace ModelDefinition\Column;

use ModelDefinition\Column\ColumnInterface;

final class Integer implements ColumnInterface
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
