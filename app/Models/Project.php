<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
        'title',
        'goal',
        'org_id',
        'desc'
    ];
    public function org(){
        $this->belongsTo(Org::class);
    }
    public function report(){
        $this->hasMany(Report::class);
    }
}
