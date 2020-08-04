<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'firstname','lastname','company_id','email','phone'
    ];

    public function companies()
    {
        return $this->belongsTo('App\Company');
    }
}
