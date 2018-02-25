<?php

namespace ModelDefinition\Model;

use ModelDefinition\Column\Interfaces\ColumnInterface;
use ModelDefinition\Column\Integer;

final class Model
{
    private $_name;
    private $_columns = [];

    public function __construct(string $name)
    {
        $this->_name = $name;
    }

    public function addColumn(ColumnInterface $column)
    {
        $this->_columns[] = $column;
        return $this;
    }

    public function integer(string $name, \Closure $q)
    {
        $integer = new Integer($name);
        $integer = $q($integer);
        return $this->addColumn($integer);
    }
}
