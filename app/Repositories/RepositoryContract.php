<?php

namespace App\Repositories;

/**
 * Interface RepositoryContract.
 */
interface RepositoryContract
{
    public function all(array $columns = ['*']);
    public function create(array $data);
    public function update($model,array $data);
    public function delete($model);

}
