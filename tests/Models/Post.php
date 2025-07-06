<?php

namespace ArsalanAhadian\ModelTranslatable\Tests\Models;

use ArsalanAhadian\ModelTranslatable\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasTranslations;

    protected $guarded = [];

    public $timestamps = false;
}
