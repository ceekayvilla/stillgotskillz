<?php
namespace App\Repositories;

use App\Models\Portfolio;
use App\Contracts\PortfolioContract;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Doctrine\Instantiator\Exception\InvalidArgumentException;

class PortfolioRepository extends BaseRepository implements PortfolioContract{

    public function __construct(Portfolio $model){
        parent::__construct($model);
        $this->model = $model;
    }

    public function findPortfolioById(string $id){
        try{
            return $this->findOneOrFail($id);
        }catch(ModelNotFoundException $e){
            throw new ModelNotFoundException($e);
        }
    }

    public function findPortfolio(array $data){
        try{
            return $this->findBy($data);
        }catch(ModelNotFoundException $e){
            throw new ModelNotFoundException($e);
        }
    }

    public function downloadPortfolio(string $id){

    }

}