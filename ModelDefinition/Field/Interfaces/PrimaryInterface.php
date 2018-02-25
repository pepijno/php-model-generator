<?php

namespace ModelDefinition\Field\Interfaces;

use ModelDefinition\Field\Decorators\Primary;

interface PrimaryInterface
{
    public function primary() : Primary;
}