<?php

namespace App\Http\Repositorys;
use Illuminate\Support\Facades\DB;
use App\Models\Stockholder;
use App\Models\Employee;
use App\Models\Transaction;
use App\Models\Lot;
use App\Models\Share;

use Illuminate\Support\Facades\Auth;

class StockholderRepository
{
  
    public function getIndividualData($userId, $userPassword)
    {
        if($userId[0]=='S')
        {
            $individual=Stockholder::where('id','=',$userId)->where('password','=',$userPassword)->first();
            return $individual;
        }
        else if($userId[0]=='E')
        {
            $individual=Employee::where('id','=',$userId)->where('password','=',$userPassword)->first();
            return $individual;
        }
        else return false;
    }

    public function getStockHolderData($userId, $userPassword)
    {

        $boss=Stockholder::where('id','=',$userId)->where('password','=',$userPassword)->where('title','=','BOSS')->first();
        if($boss)
        {
            $allStockHolder=DB::table('Stockholder')->get();
            dd($allStockHolder);
            return $allStockHolder;
        }
        else return false;
    }
}

