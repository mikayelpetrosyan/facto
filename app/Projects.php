<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $fillable = ['name_en','name_am','name_ru','description_en','description_am','description_ru'];

}
