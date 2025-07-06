<?php

namespace ArsalanAhadian\ModelTranslatable\Models;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected $guarded = [
        'id', 'created_at', 'updated_at',
    ];
}
