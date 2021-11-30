<?php
namespace App\Contracts;

interface PortfolioContract {

    public function findPortfolioById(string $id);

    public function findPortfolio(array $params);

    public function downloadPortfolio(string $id);

}