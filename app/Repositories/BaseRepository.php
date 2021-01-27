<?php

namespace App\Repositories;

use Illuminate\Support\Collection;
abstract class BaseRepository implements RepositoryContract
{
    protected $model;
    /**
     * BaseRepository constructor.
     */
    public function __construct()
    {
        $this->makeModel();
    }
    /**
     * Define repository modal
     *
     * @like[User::class]
     */
    abstract public function model();
    /**
     * @return Model|mixed
     *
     * @throws GeneralException
     */
    public function makeModel()
    {
        $model = app()->make($this->model());

        // if (!$model instanceof Model) {
        //     throw new GeneralException("Class {$this->model()} must be an instance of " . Model::class);
        // }

        return $this->model = $model;
    }
    /**
     * Get all list from model
     *
     * @return Collection
     */
    public function all(array $columns = ['*'])
    {
        return $this->model::get();
    }

    /**
     * Create modal collection
     *
     * @param $data
     * @return bool|Object
     */
    public function create(array $data)
    {
        if (empty($data)) return false;
        $result = $this->model::create($data);
        if($result) return $result->refresh();
        return false;
    }

    /**
     * Find Row id form model list
     *
     * @param $primaryKey
     * @return Object
     */
    public function find(int $primaryKey)
    {
        return $this->model::find($primaryKey);
    }

    /**
     * Find Row id form model list
     *
     * @param $primaryKey
     * @return Object
     */
    public function findOrFail(int $primaryKey)
    {
        return $this->model::findOrFail($primaryKey);
    }

    /**
     * Update model
     *
     * @param integer $primaryKey
     * @param $data
     * @return bool|Object
     */
    public function update(int $id,array $data)
    {
        if (!$id || empty($data)) return false;
        if($this->findOrFail($id)->update($data)) return $this->find($id)->refresh();
        return false;
    }

    public function delete(int $id) {
        if(!$id) return false;
        return $this->findOrFail($id)->delete();
    }
}
