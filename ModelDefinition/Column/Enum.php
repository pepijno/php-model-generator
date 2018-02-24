<?php

namespace ModelDefinition\Column;

use ModelDefinition\Column\AbstractColumn;

final class Enum extends AbstractColumn
{
    private $_options;

    public function __construct(string $name, array $options)
    {
        parent::__construct($name);
        $this->_options = $options;
    }
}