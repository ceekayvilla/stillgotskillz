<?php
namespace App\Contracts;

/**
 * Interface BaseContract
 * @package App\Contracts
 */

interface BaseContract{

    /**
     * create a model instance create()
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes);

    /**
     * update a model instance update()
     * @param array $attributes
     * @param int $id
     * @return mixed
     */
    public function update(array $attributes, $id);

    /**
     * return all model rows (all())
     * @param array $columns
     * @param string $orderBy
     * @param string $sortBy
     * @return mixed
     */
    public function all($colums = array('*'), $orderBy='id', string $sortBy='desc');

    /**
     * Find one row by ID (find())
     * @param int $id
     * @return mixed
     */
    public function find($id);

    /**
     * Find one row by ID or throw exception (findOneOrFail)
     * @param int $id
     * @return mixed
     */
    public function findOneOrFail($id);

    /**
     * Find based on a different column (findBy())
     * @param  array $data
     * @return mixed
     */
    public function findBy(array $data);

    /**
     * Find one row based on a different column
     * @param array $data
     * @return mixed
     */
    public function findOneBy(array $data);


    /**
     * Find one based on a different column or through exception
     * @param array $data
     * @return mixed
     */
    public function findOneByOrFail(array $data);

    /**
     * Delete one by ID
     * @param int $id
     * @return mixed
     */
    public function delete($id);

}