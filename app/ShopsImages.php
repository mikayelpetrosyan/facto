<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopsImages extends Model
{
    protected $fillable = ['shops_id', 'filename'];

    public function shops()
    {
        return $this->belongsTo('App\Shops');
    }
}