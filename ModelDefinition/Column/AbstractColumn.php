<?php

namespace ModelDefinition\Column;

use ModelDefinition\Column\Interfaces\ColumnInterface;
use ModelDefinition\Column\Traits\NullableTrait;
use ModelDefinition\Column\Traits\PrimaryTrait;
use ModelDefinition\Column\Traits\DefaultValueTrait;

abstract class AbstractColumn implements ColumnInterface
{
    use NullableTrait;
    use PrimaryTrait;
    use DefaultValueTrait;

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
