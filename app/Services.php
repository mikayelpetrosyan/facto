<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\App;

class Services extends Model
{
    protected $fillable = ['name_en','name_am','name_ru','title_en','title_am','title_ru'];

}
