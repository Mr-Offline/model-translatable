<?php

namespace ArsalanAhadian\ModelTranslatable\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ArsalanAhadian\ModelTranslatable\ModelTranslatable
 */
class ModelTranslatable extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \ArsalanAhadian\ModelTranslatable\ModelTranslatable::class;
    }
}
