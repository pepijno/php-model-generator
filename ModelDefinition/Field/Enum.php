<?php

namespace ModelDefinition\Field;

use ModelDefinition\Field\AbstractField;
use ModelDefinition\Field\Interfaces\FieldInterface;

final class Enum extends AbstractField implements FieldInterface
{
    private $_options;

    public function __construct(string $name, array $options)
    {
        parent::__construct($name);
        $this->_options = $options;
    }
}
