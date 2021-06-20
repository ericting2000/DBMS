<?php
namespace App\Http\Services;
use App\Http\Repositorys\StockHolderRepository;

class StockHolderService
{
    public function __construct(
        StockHolderRepository $StockHolderRepository
    ) {
        $this->StockHolderRepository = $StockHolderRepository;
    }

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
}