<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class patient extends Eloquent
{
   
protected $connection = 'mongodb';
    protected $collection = 'patients';
    
    protected $fillable = [
        'doctor', 'date','prescription'
    ];
}
