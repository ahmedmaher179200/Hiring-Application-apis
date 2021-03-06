<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryTranslation extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    protected $casts = [
        'category_id'=> 'integer',
    ];

}
