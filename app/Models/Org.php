<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Org extends Model
{
    //
    protected $fillable = [
        'name',
        'address',
        'city',
        'state',
        'postal_code',
        'location',
        'phone',
        'web_url',
        'location_of_operation',
        'themes',
        'programs',
        'mission',
        'awards_reg',
        'religious_affiliation',
        'director_name',
        'title',
        'scope',
        'employees',
        'volunteers',
        'year_founded',
    ];
    
    public function user(){
        $this->belongsTo(User::class);
    }

    public function projects(){
        $this->hasMany(Project::class);
    }
}
