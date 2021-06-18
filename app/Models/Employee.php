<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'Employee';
    public $timestamps = false;
    //protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    public function leave()
    {
        return this->hasMany('App\Models\LeaveSystem','id');
    }

}