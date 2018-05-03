<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\App;

class SubCategory extends Model
{
    protected $fillable = ['subcategory','sub_img'];

    public function categories(){
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    public function apps(){
        return $this->hasMany('App\App');
    }
}
