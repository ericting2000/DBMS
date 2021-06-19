<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

use App\Http\Services\StockHolderService;


class StockHolderController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function __construct(
        StockHolderService $StockHolderService
    ) {
        $this->StockHolderService = $StockHolderService;
    }

    //取得個人資料
    //Request $request
    //@return Json $get_individual_info
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
}