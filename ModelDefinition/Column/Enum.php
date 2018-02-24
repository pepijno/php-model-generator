<?php

namespace ModelDefinition\Column;

use ModelDefinition\Column\AbstractColumn;
use ModelDefinition\Column\Interfaces\ColumnInterface;

final class Enum extends AbstractColumn implements ColumnInterface
{
    private $_options;

    public function __construct(string $name, array $options)
    {
        parent::__construct($name);
        $this->_options = $options;
    }
}
