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
        if(empty($userId) || empty($userPassword))
        {
            return response('error',400);
        }
        $get_individual_info=$this->StockHolderService->getIndividualData($userId, $userPassword);
        return response()->json($get_individual_info,200);
    }

    public function getStockHolderInfo(Request $request)
    {
        $userInfo=$request;
        $userId=$userInfo->userId;
        $userPassword=$userInfo->userPassword;
        if(empty($userId) || empty($userPassword))
        {
            return response('error',400);
        }
        $get_StockHolder_info=$this->StockHolderService->getStockHolderData($userId, $userPassword);
        return response()->json($get_StockHolder_info,200);
    }
}