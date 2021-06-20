<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    //protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'Transaction';
    public $timestamps = false;

    public function stockholder()
    {
        //return this->belongsTo('App\Models\Stockholder','id');
    }
    public function share()
    {
        //return this->hasMany('App\Models\Sharer','serialNumber');
    }
    public function lot()
    {
        //return this->hasMany('App\Models\Lot','serialNumber');
    }


}