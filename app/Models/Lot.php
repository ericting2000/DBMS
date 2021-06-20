<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    use HasFactory;

    protected $table = 'Lot';
    public $timestamps = false;
    //protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    public function transaction()
    {
        //return this->belongsTo('App\Models\Transaction','serialNumber');
    }
}