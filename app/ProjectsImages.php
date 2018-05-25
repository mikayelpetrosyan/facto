<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectsImages extends Model
{
    protected $fillable = ['projects_id', 'filename'];

    public function projects()
    {
        return $this->belongsTo('App\Projects');
    }
}