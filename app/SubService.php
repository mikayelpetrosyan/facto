<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubService extends Model
{
    protected $fillable = [
        'services_id','title_en','title_am','title_ru',
        'description_en','description_am','description_ru','img'
    ];


    public function services(){
        return $this->belongsTo('App\Services', 'services_id', 'id');
    }

}
