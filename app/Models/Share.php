<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    use HasFactory;

    protected $table = 'Share';
    public $timestamps = false;
    //protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    public function transaction()
    {
        return this->belongsTo('App\Models\Transaction','serialNumber');
    }
}