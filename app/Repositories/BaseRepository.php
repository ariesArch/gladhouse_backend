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
     * @param $request
     * @return bool|Object
     */
    public function create(array $data)
    {
        if (empty($request)) {
            return false;
        }
        $result = $this->model::create();
        if($result){
            return $result->refresh();
        }
        return false;
    }

    /**
     * Update model
     *
     * @param integer $primaryKey
     * @param $request
     * @return bool|Object
     */
    public function update($model,array $data)
    {
        if (!$model || empty($data)) {
            return false;
        }
        if ($model->update($data)) {
            return $model->refresh();
        }
        return false;
    }

    public function delete($model) {
        if(!$model) return false;
        return $model->delete();
    }
}
