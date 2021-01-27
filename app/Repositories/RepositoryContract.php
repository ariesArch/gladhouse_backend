<?php

namespace App\Repositories;

/**
 * Interface RepositoryContract.
 */
interface RepositoryContract
{
    public function all(array $columns = ['*']);
    public function create(array $data);
    public function find(int $id);
    public function update(int $id,array $data);
    public function delete(int $id);

}
