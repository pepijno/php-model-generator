<?php

namespace ModelDefinition\Model;

use ModelDefinition\Model\Model;

final class Models
{
    private $_models = [];

    public function addModel(Model $model)
    {
        $this->_models[] = $model;
    }
}
