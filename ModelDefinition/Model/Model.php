<?php

namespace ModelDefinition\Model;

use ModelDefinition\Field\Interfaces\FieldInterface;
use ModelDefinition\Field\Integer;

final class Model
{
    private $_name;
    private $_fields = [];

    public function __construct(string $name)
    {
        $this->_name = $name;
    }

    public function addField(FieldInterface $field)
    {
        $this->_fields[] = $field;
        return $this;
    }

    public function integer(string $name, \Closure $q)
    {
        $integer = new Integer($name);
        $integer = $q($integer);
        return $this->addField($integer);
    }
}
