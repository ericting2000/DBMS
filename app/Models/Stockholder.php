<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stockholder extends Model
{
    use HasFactory;

    protected $table = 'Stockholder';
    public $timestamps = false;
    //protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    public function transaction()
    {
        return this->hasMany('App\Models\Transaction','id');
    }

}