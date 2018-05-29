<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title_en','title_am','title_ru',
        'description_en','description_am','description_ru','img'
    ];


}
