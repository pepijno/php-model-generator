<?php

namespace ModelDefinition\Field\Decorators;

use ModelDefinition\Field\Decorators\AbstractDecorator;

final class DefaultValue extends AbstractDecorator
{
    private $_defaultValue;

    public function __construct(FieldInterface $field, $defaultValue)
    {
        parent::__construct($field);
        $this->_defaultValue = $defaultValue;
    }
}
