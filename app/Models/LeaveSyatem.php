<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveSystem extends Model
{
    use HasFactory;

    protected $table = 'Leave';
    public $timestamps = false;
    //protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    public function employee()
    {
        //return this->belongsTo('App\Models\Employee','id');
    }
}