<?php
namespace App\Repositories;
use App\Contracts\BaseContract;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseRepository
 * 
 * @package  App\Repositories
 */
class BaseRepository implements BaseContract{
    protected $model;

    public function __construct(Model $model){
        $this->model = $model;
    }

    /**
     * 
     * @param  array  $attributes 
     * @return mixed
     */
    public function create(array $attributes){
        return $this->model->create($attributes);
    }

    /**
     * 
     * @param  array  $attributes
     * @param  string|int $id
     * @return bool
     */
    public function update(array $attributes, $id) : bool{
        return $this->find($id)->update($attributes);

    }

    /**
     * 
     * @param  array  $columns
     * @param  string $orderBy
     * @param  string $sortBy 
     * @return mixed      
     */
    public function all($columns = array('*'), $orderBy='id', string $sortBy = 'asc'){
        return $this->model->orderBy($orderBy, $sortBy)->get($columns);
    }

    /**
     * 
     * @param  string|int $id
     * @return mixed
     */
    public function find($id){
        return $this->model->find($id);
    }

    /**
     * 
     * @param  string|int $id
     * @return mixed   
     */
    public function findOneOrFail($id){
        return $this->model->findOrFail($id);
    }

    /**
     * 
     * @param  array  $data
     * @return mixed      
     */
    public function findBy(array $data){
        return $this->model->where($data)->all();
    }
    
    /**
     * 
     * @param  array  $data
     * @return mixed      
     */
    public function findOneBy(array $data){
        return $this->model->where($data)->first();
    }

    /**
     * @param array $data
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findOneByOrFail(array $data)
    {
        return $this->model->where($data)->firstOrFail();
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete($id) : bool
    {
        return $this->model->find($id)->delete();
    }
}