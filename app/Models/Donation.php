<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    //
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'amount',
        'org_id',
        'project_title'
    ];
    public function project()
    {
        return $this->belongsTo(Org::class);
    }
}
