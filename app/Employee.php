<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = false;


    public function department()
    {
        return $this->belongsTo('App\Department', 'department_id');
    }
    //
}
