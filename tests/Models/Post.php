<?php

namespace ArsalanAhadian\ModelTranslatable\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use ArsalanAhadian\ModelTranslatable\Traits\HasTranslations;

class Post extends Model
{
    use HasTranslations;

    protected $guarded = [];
    public $timestamps = false;
}
