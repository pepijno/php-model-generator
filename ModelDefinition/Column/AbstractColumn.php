<?php

namespace ModelDefinition\Column;

use ModelDefinition\Column\Interfaces\ColumnInterface;

abstract class AbstractColumn implements ColumnInterface
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
}
