<?php

namespace App\Http\Repositorys;
use Illuminate\Support\Facades\DB;
use App\Models\Stockholder;
use App\Models\Employee;
use App\Models\Transaction;
use App\Models\Lot;
use App\Models\Share;
use \Datetime;

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

        $boss=Stockholder::where('id','=',$userId)->where('password','=',$userPassword)->first();
        if($boss)
        {
            $allStockHolder=DB::table('Stockholder')->get();
            return $allStockHolder;
        }
        else return false;
    }

    public function modifyPw($userId, $userPassword, $newPassword)
    {
        if($userId[0]=='S')
        {
            $updatePassword=Stockholder::where('id','=',$userId)->where('password','=',$userPassword)->first();
            if($updatePassword)
            {
                $affected = DB::table('Stockholder')->where('id', '=', $userId)->update(array('password' => $newPassword));
                if($affected) return true;
                else return false;
            }
            else return false;
        }
        else if($userId[0]=='E')
        {
            $updatePassword=Employee::where('id','=',$userId)->where('password','=',$userPassword)->first();
            if($updatePassword)
            {
                $affected = DB::table('Employee')->where('id', '=', $userId)->update(array('password' => $newPassword));
                if($affected) return true;
                else return false;

            }
            else return false;
        }
        else return false;
    }

    public function getTransInfo($userId)
    {
        //->join('Lot','Transaction.serialNumber','=','Lot.serialNumber')
        //->join('Share','Transaction.serialNumber','=','Share.serialNumber')
        $info=DB::table('Transaction')->where('id', '=', $userId)
                    ->select('Transaction.serialNumber', 'Transaction.type','Transaction.datetime')
                    ->get();
        if($info)
        {
            return $info;
        }
        else return false;
    }
    
    public function makeTransaction($userId, $share, $lot, $type, $dateTime)
    {
        $find=Stockholder::where('id','=',$userId)->first();
        if($find)
        {
            if($type=='sell')
            {
                $oldLot=$find->lot;
                $oldShare=$find->share;
                $newLot = DB::table('Stockholder')->where('id', '=', $userId)->update(array('lot' => $oldLot-$lot));
                $newShare = DB::table('Stockholder')->where('id', '=', $userId)->update(array('share' => $oldShare-$share));
                if($newLot && $newShare) return true;
                else return false;
            }
            else if($type=='buy')
            {
                $oldLot=$find->lot;
                $oldShare=$find->share;
                $newLot = DB::table('Stockholder')->where('id', '=', $userId)->update(array('lot' => $lot+$oldLot));
                $newShare = DB::table('Stockholder')->where('id', '=', $userId)->update(array('share' => $share+$oldShare));
                if($newLot && $newShare) return true;
                else return false;
            }
            else return false;
            
        }
        else return false;
    }
    public function modifyStockHolder($userId, $name, $userPassword, $birth, $cell,
                                                    $title, $address)
    {
        { 
            //dd($userId, $name, $userPassword, $birth, $cell, $local, $gender, $company, $email, $title, $time, $address);
    
            if($userId[0]=='S')
            {
                $exist=StockHolder::where('id','=',$userId)->first();
                if($exist)
                {
                    //dd($name);
                    $affected = DB::table('StockHolder')->where('id',$userId)
                                    ->where('password',$userPassword)->update(
                                    array('name' => $name,
                                        'birth' => $birth,
                                        'phoneNumber' => $cell,
                                        'title' => $title,
                                        'address' => $address
                                        )
                                    );
                    if($affected) return true;
                    else return false;
                }
                else
                {
                    $error='Id not existed';
                    return $error;
                }
            }
            else return false;
        }
    }
}

