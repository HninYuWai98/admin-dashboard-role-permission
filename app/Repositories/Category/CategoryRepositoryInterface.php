<?php

namespace App\Repositories\Category;

interface CategoryRepositoryInterface
{
    public function all();

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);
}
