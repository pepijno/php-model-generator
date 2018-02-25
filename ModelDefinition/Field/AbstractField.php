<?php

namespace ModelDefinition\Field;

use ModelDefinition\Field\Interfaces\FieldInterface;
use ModelDefinition\Field\Traits\NullableTrait;
use ModelDefinition\Field\Traits\PrimaryTrait;
use ModelDefinition\Field\Traits\DefaultValueTrait;

abstract class AbstractField implements FieldInterface
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
