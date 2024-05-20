<?php

namespace App\Repositories\Brand;


use Exception;
use App\Models\Brand\Brand;
use Illuminate\Support\Facades\DB;
use App\Repositories\Brand\BrandRepositoryInterface;

class BrandRepository implements BrandRepositoryInterface
{
    public function all()
    {
        $brands = Brand::get();

        return $brands;

    }

    public function create(array $data)
    {
        try{
            DB::beginTransaction();

            $brand = Brand::create($data);

            DB::commit();

        }catch(Exception $exception){
            DB::rollback();
        }

        return $brand;
    }

    public function update(array $data, $id)
    {
        try{
            DB::beginTransaction();

            $brand = Brand::findOrFail($id);

            $brand->update($data);

            DB::commit();
        }catch(Exception $exception){
            DB::rollBack();
        }
        return ($brand);
    }

    public function delete($id)
    {
        try{
            DB::beginTransaction();

            $brand = Brand::findOrFail($id);

            $brand->delete();

            DB::commit();

        }catch(Exception $exception){
            DB::rollBack();
        }
        return $brand;
    }
}


