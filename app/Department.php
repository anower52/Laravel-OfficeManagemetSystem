<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = false;


    public function employees()
    {
        return $this->hasMany('App\Employee', 'department_id');
    }

    public $fillable = [];
    //
}
