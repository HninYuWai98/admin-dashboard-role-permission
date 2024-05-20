<?php

namespace App\Services\Brand;

use Exception;
use App\Models\Brand\Brand;
use Illuminate\Support\Facades\DB;
use App\Repositories\Brand\BrandRepository;
use App\Repositories\Brand\BrandRepositoryInterface;


class BrandService
{
    protected BrandRepositoryInterface $brandRepository;

    public function __construct(
        BrandRepositoryInterface $brandRepository
    )
    {
        $this->brandRepository = $brandRepository;
    }

    public function getAllBrand()
    {

        $brands = $this->brandRepository->all()->toArray();
        return $brands;

    }

    public function storeBrand($data)
    {
        $brand = $this->brandRepository->create($data);

        return $brand;
    }

    public function editBrand($id)
    {
        $brand = Brand::findOrFail($id);

        return $brand;
    }

    public function updateBrand($data, $id)
    {
        $brand = $this->brandRepository->update($data, $id);

        return $brand;

    }

    public function deleteBrand($id)
    {
        $brand = $this->brandRepository->delete($id);
    }
}
