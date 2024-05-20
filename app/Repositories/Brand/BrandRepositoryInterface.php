<?php

namespace App\Repositories\Brand;

interface BrandRepositoryInterface
{
    public function all();

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);
}

