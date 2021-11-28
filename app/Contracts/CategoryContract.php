<?php
namespace App\Contracts;

interface CategoryContract{

    /**
     * listCategories
     * @param  string $order   
     * @param  string $sort    
     * @param  array  $columns 
     * @return [type]          
     */
    public function listCategories(string $order = 'name', string $sort = 'asc', array $columns = ['*']);

    /**
     * findCategoryById
     * @param  string $id 
     * @return [type]     
     */
    public function findCategoryById(string $id);

    /**
     * createCategory
     * @param  array  $params
     * @return [type]        
     */
    public function createCategory(array $params);


    /**
     * updateCategory
     * @param  array  $params 
     * @return [type]         
     */
    public function updateCategory(array $params);

    /**
     * deleteCategory
     * @param  string $id 
     * @return [type]     
     */
    public function deleteCategory(string $id);
}