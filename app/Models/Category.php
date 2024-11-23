<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = "categorys";

    use HasFactory;

    protected $fillable = [
        "baseid",
        "parentid",
        "name",
        "slug",
        'description',
        'title_seo',
        'description_seo'
    ];
}
