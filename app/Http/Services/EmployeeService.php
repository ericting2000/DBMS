<?php
namespace App\Http\Services;
use App\Http\Repositorys\EmployeeRepository;

class EmployeeService
{
    public function __construct(
        EmployeeRepository $EmployeeRepository
    ) {
        $this->EmployeeRepository = $EmployeeRepository;
    }
    
    public function getLeaveData($userId)
    {
        return $this->EmployeeRepository->getLeaveData($userId);
    }

    public function getEmployeeInfo($userId, $userPassword)
    {
        return $this->EmployeeRepository->getEmployeeInfo($userId, $userPassword);
    }
    
/*
    public function getIndividualData($userId, $userPassword)
    {
        return $this->StockHolderRepository->getIndividualData($userId, $userPassword);
    }

    public function getStockHolderData($userId, $userPassword)
    {
        return $this->StockHolderRepository->getStockHolderData($userId, $userPassword);
    }

    public function modifyPw($userId, $userPassword, $newPassword)
    {
        return $this->StockHolderRepository->modifyPw($userId, $userPassword, $newPassword);
    }

    public function getTransInfo($userId)
    {
        return $this->StockHolderRepository->getTransInfo($userId);
    }

    public function makeTransaction($userId, $share, $lot, $type, $dateTime)
    {
        return $this->StockHolderRepository->makeTransaction($userId, $share, $lot, $type, $amount, $dateTime);
    }
    */
}