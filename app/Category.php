<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category'];

    public function sub_categories(){
        return $this->hasMany('App\SubCategory', 'category_id', 'id' );
    }
}
