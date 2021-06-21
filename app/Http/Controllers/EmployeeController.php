<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

use App\Http\Services\EmployeeService;


class EmployeeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function __construct(
        EmployeeService $EmployeeService
    ) {
        $this->EmployeeService = $EmployeeService;
    }
    
    public function getLeaveData(Request $request)
    {
        $userInfo=$request;
        $userId=$userInfo->userId;
        if(empty($userId)){
            return response('error: exist empty',400);
        }
        $get_leave_info=$this->EmployeeService->getLeaveData($userId);
        if($get_leave_info){
            return response()->json($get_leave_info,200);
        }
        else{
            return response('error: data error',400);
        }
    }

    public function getEmployeeInfo(Request $request)
    {
        $userInfo=$request;
        $userId=$userInfo->userId;
        $userPassword=$userInfo->userPassword;
        if(empty($userId) || empty($userPassword))
        {
            return response('error: exist empty',400);
        }
        $get_Employee_info=$this->EmployeeService->getEmployeeInfo($userId, $userPassword);
        if($get_Employee_info){
            return response()->json($get_Employee_info,200);
        }
        else{
            return response('error: data error',400);
        }
    }

    public function getAllLeaveData(Request $request)
    {
        $userInfo=$request;
        $userId=$userInfo->userId;
        $userPassword=$userInfo->userPassword;
        if(empty($userId || $userPassword)){
            return response('error: exist empty',400);
        }
        $get_leave_info=$this->EmployeeService->getAllLeaveData($userId, $userPassword);
        if($get_leave_info){
            return response()->json($get_leave_info,200);
        }
        else{
            return response('error: data error',400);
        }
    }

    public function makeLeave(Request $request)
    {
        $userInfo=$request;
        $userId=$userInfo->userId;
        $leaveDateStart=$userInfo->leaveDateStart;
        $leaveEnd=$userInfo->leaveDateEnd;
        $leaveReason=$userInfo->leaveReason;
        if(empty($userId || $leaveDateStart || $leaveEnd || $leaveReason)){
            return response('error: exist empty',400);
        }
        $get_leave_info=$this->EmployeeService->makeLeave($userId, $leaveDateStart, $leaveEnd, $leaveReason);
        if($get_leave_info){
            return response()->json($get_leave_info,200);
        }
        else{
            return response('error: data error',400);
        }
    }

    public function insertEmployee(Request $request)
    {
        $userInfo=$request;
        $userId=$userInfo->userId;
        $userPassword=$userInfo->userPassword;
        $name=$userInfo->userName;
        $birth=$userInfo->userBirth;
        $cell=$userInfo->userCellPhone;
        $local=$userInfo->userLocalPhone;
        $gender=$userInfo->userGender;
        $company=$userInfo->company;
        $email=$userInfo->userEmail;
        $title=$userInfo->userTitle;
        $time=$userInfo->onBoardTime;
        $address=$userInfo->userAddress;
        if(empty($userId || $userPassword || $birth || $cell || $local || $gender 
                         || $company || $email || $title || $time || $address)){
            return response('error: exist empty',400);
        }
        $insert=$this->EmployeeService->insertEmployee($userId, $name, $userPassword, $birth, $cell,
                                                    $local, $gender, $company, $email, $title, $time, $address);
        if($insert){
            return response()->json($insert,200);
        }
        else{
            return response('error: data error',400);
        }
    }
    
/*
    public function getIndividualInfo(Request $request)
    {
        $userInfo=$request;
        $userId=$userInfo->userId;
        $userPassword=$userInfo->userPassword;
        if(empty($userId) || empty($userPassword)){
            return response('error: exist empty',400);
        }
        $get_individual_info=$this->StockHolderService->getIndividualData($userId, $userPassword);
        if($get_individual_info){
            return response()->json($get_individual_info,200);
        }
        else{
            return response('error: data error',400);
        }
    }

    public function getStockHolderInfo(Request $request)
    {
        $userInfo=$request;
        $userId=$userInfo->userId;
        $userPassword=$userInfo->userPassword;
        if(empty($userId) || empty($userPassword))
        {
            return response('error: exist empty',400);
        }
        $get_StockHolder_info=$this->StockHolderService->getStockHolderData($userId, $userPassword);
        if($get_StockHolder_info){
            return response()->json($get_StockHolder_info,200);
        }
        else{
            return response('error: data error',400);
        }
    }
    
    public function modifyPassword(Request $request)
    {
        $userInfo=$request;
        $userId=$userInfo->userId;
        $userPassword=$userInfo->userPassword;
        $newPassword=$userInfo->newPassword;
        if(empty($userId) || empty($userPassword) || empty($newPassword)){
            return response('error: exist empty',400);
        }
        $updatePassword=$this->StockHolderService->modifyPw($userId, $userPassword, $newPassword);
        //dd($updatePassword);
        if($updatePassword){
            return response()->json($updatePassword,200);
        }
        else{
            return response('error: data error',400);
        }
    }

    public function getTransInfo(Request $request)
    {
     //dd('123');
        $userId=$request->userId;
        if(empty($userId))
        {
            return response('error: exist empty',400);
        }
        $get_Trans_info=$this->StockHolderService->getTransInfo($userId);
        if($get_Trans_info){
            return response()->json($get_Trans_info,200);
        }
        else{
            return response('error: data error',400);
        }
    }

    public function makeTransaction(Request $request)
    {
        $userId=$request->userId;
        $share=$request->share;
        $lot=$request->lot;
        $type=$request->type;
        $amount=$request->amount;
        $dateTime=$request->dateTime;
        if(empty($userId))
        {
            return response('error: exist empty',400);
        }
        $transaction=$this->StockHolderService->makeTransaction($userId, $share, $lot, $type, $amount, $dateTime);
        if($transaction){
            return response()->json($transaction,200);
        }
        else{
            return response('error: data error',400);
        }
    }
*/
}    
