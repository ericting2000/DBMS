<?php

namespace App\Http\Repositorys;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use App\Models\LeaveSystem;
use \Datetime;

use Illuminate\Support\Facades\Auth;

class EmployeeRepository
{
    
    public function getLeaveData($userId)
    {
        $leaveData=DB::table('LeaveSystem')->where('id',$userId)->get();
        if($leaveData) return $leaveData;
        else return false;
    }

    public function getEmployeeInfo($userId, $userPassword)
    {

        $boss=Employee::where('id','=',$userId)->where('password','=',$userPassword)->first();
        if($boss)
        {
            $allEmployee=DB::table('Employee')->get();
            return $allEmployee;
        }
        else return false;
    }

    public function getAllLeaveData($userId, $userPassword)
    {
        $boss=Employee::where('id','=',$userId)->where('password','=',$userPassword)->first();
        $leaveData=DB::table('LeaveSystem')->get();
        if($leaveData) return $leaveData;
        else return false;
    }

    public function makeLeave($userId, $leaveDateStart, $leaveEnd, $leaveReason)
    {
        if($userId[0]=='E')
        {
            
            $findName=Employee::where('id','=',$userId)->first();
            $datetimeStart = Datetime::createFromFormat('Y-m-d', $leaveDateStart);
            $datetimeStart=$datetimeStart->format('Y-m-d');
            $datetimeEnd = Datetime::createFromFormat('Y-m-d', $leaveEnd);
            $datetimeEnd=$datetimeEnd->format('Y-m-d');
            $name=$findName->name;
            //dd($name);
            $affected = DB::table('LeaveSystem')->insert(
                            array('id' => $userId,
                                  'name' => $name,
                                  'dateStart' => $leaveDateStart,
                                  'dateEnd' => $leaveEnd,
                                  'leaveReason' => $leaveReason)
                            );
            if($affected) return true;
            else return false;
        }
        else return false;
    }
    public function insertEmployee($userId, $name, $userPassword, $birth, $cell,
                                    $local, $gender, $company, $email, $title, $time, $address)
    { 
        //dd($userId, $name, $userPassword, $birth, $cell, $local, $gender, $company, $email, $title, $time, $address);

        if($userId[0]=='E')
        {
            $exist=Employee::where('id','=',$userId)->first();
            if(!$exist)
            {
                //dd($name);
                $datetime = Datetime::createFromFormat('Y-m-d', $time);
                $datetime=$datetime->format('Y-m-d');
                //dd($datetime);
                $affected = DB::table('Employee')->insert(
                                array('id' => $userId,
                                    'name' => $name,
                                    'password' => $userPassword,
                                    'birth' => $birth,
                                    'cellPhone' => $cell,
                                    'localPhone' => $local,
                                    'gender' => $gender,
                                    'company' => $company,
                                    'email' => $email,
                                    'title' => $title,
                                    'onBoardTime' => $datetime,
                                    'address' => $address
                                    )
                                );
                if($affected) return true;
                else return false;
            }
            else
            {
                $error='Id already existed';
                return $error;
            }
        }
        else return false;
    }

    public function deleteEmployee($userId)
    {
        if($userId[0]=='E')
        {
            $affected = DB::table('LeaveSystem')->where('id', '=', $userId)->delete();
            $affected = DB::table('Employee')->where('id', '=', $userId)->delete();
            if($affected) return true;
            else return false;
        }
        else return false;
    }

    public function modifyEmployee($userId, $name, $userPassword, $birth, $cell,
                                    $local, $gender, $email, $title, $address)
    { 
        //dd($userId, $name, $userPassword, $birth, $cell, $local, $gender, $company, $email, $title, $time, $address);

        if($userId[0]=='E')
        {
            $exist=Employee::where('id','=',$userId)->first();
            if($exist)
            {
                //dd($name);
                $affected = DB::table('Employee')->where('id',$userId)
                                ->where('password',$userPassword)->update(
                                array('name' => $name,
                                    'birth' => $birth,
                                    'cellPhone' => $cell,
                                    'localPhone' => $local,
                                    'gender' => $gender,
                                    'email' => $email,
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

  /*
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
    }*/
    /*
    public function makeTransaction($userId, $share, $lot, $type, $amount, $dateTime)
    {
        $find=Stockholder::where('id','=',$userId)->first();
        if($find)
        {
            if($type=='sell')
            {
                //$affected = DB::table('Stockholder')->where('id', '=', $userId)->update(array('password' => $newPassword));
                if($affected) return true;
                else return false;
            }
            else if($type=='buy')
            {
                if($share>0)
                {

                }
                $affected = DB::table('Stockholder')->where('id', '=', $userId)->update(array('password' => $newPassword));
                if($affected) return true;
                else return false;
            }
            else return false;
            
        }
        else return false;
    }*/
}

