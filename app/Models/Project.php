<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
        'title',
        'funding_goal',
        'org_id',
        'project_summary',
        'theme',
        'project_location',
        'cover_img'
    ];
    public function org(){
        return $this->belongsTo(Org::class);
    }
    public function report(){
        return $this->hasMany(Report::class);
    }
    
}
