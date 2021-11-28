<?php 
namespace App\Repositories;

use App\Models\Category;
use App\Contracts\CategoryContract;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Doctrine\Instantiator\Exception\InvalidArgumentException;

class CategoryRepository extends BaseRepository implements CategoryContract{


    public function __construct(Category $model){
        parent::__construct($model);
        $this->model = $model;
    }

     /**
     * listCategories
     * @param  string $order   
     * @param  string $sort    
     * @param  array  $columns 
     * @return [type]          
     */
    public function listCategories(string $order = 'name', string $sort = 'asc', array $columns = ['*']){
        return $this->all($columns, $order, $sort);
    }

    /**
     * findCategoryById
     * @param  string $id 
     * @return [type]     
     */
    public function findCategoryById(string $id){
        try{
            return $this->findOneOrFail($id);
        }catch(ModelNotFoundException $e){
            throw new ModelNotFoundException($e);
        }
    }

    /**
     * createCategory
     * @param  array  $params
     * @return [type]        
     */
    public function createCategory(array $params){
        try{
            $category = new Category($params);
            $category->save();
            return $category;
        }catch (QueryException $exception) {
            throw new InvalidArgumentException($exception->getMessage());
        }
    }


    /**
     * updateCategory
     * @param  array  $params 
     * @return [type]         
     */
    public function updateCategory(array $params){
        $category = $this->findCategoryById($params['id']);
        $category->update($params);
        return $category;
    }

    /**
     * deleteCategory
     * @param  string $id 
     * @return [type]     
     */
    public function deleteCategory(string $id){
        $category = $this->findCategoryById($id);
        $category->delete();
        return $category;
    }

    public function trashedCategories(string $order='name',string $sort='asc'){
        $categories = $this->model::onlyTrashed()->orderBy($order, $sort)->get();
        return $categories;
    }

    public function restoreCategory(string $id){
        $category = $this->model->withTrashed()->find($id);
        $category->restore();
        return $category;
    }
}