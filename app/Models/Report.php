<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //
    protected $fillable = [
        'title',
        'body',
        'org_id',
        'user_id',
    ];
    public function project(){
        $this->belongsTo(Project::class);
    }
}
