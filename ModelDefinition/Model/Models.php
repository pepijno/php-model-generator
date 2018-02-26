<?php

namespace ModelDefinition\Model;

use ModelDefinition\Model\Model;

final class Models
{
    private $_models = [];
    private $_subModels = [];
    private $_namespace;
    private $_directory;

    public function __construct($namespace, $dir)
    {
        $this->_namespace = $namespace;
        $this->_directory = $directory;
    }

    public function addSubmodels(Models $models)
    {
        $this->_subModels[] = $models;
        return $this;
    }

    public function addModel(Model $model)
    {
        $this->_models[] = $model;
        return $this;
    }
}
