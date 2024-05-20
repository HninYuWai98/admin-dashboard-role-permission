<?php

namespace App\Repositories\Category;

use TheSeer\Tokenizer\Exception;
use App\Models\Category\Category;
use Illuminate\Support\Facades\DB;
use App\Repositories\Category\CategoryRepositoryInterface;


class CategoryRepository implements CategoryRepositoryInterface
{
    public function all()
    {
        $categories = Category::with('brand')->get();
        return $categories;
    }

    public function create(array $data)
    {
        try{
            DB::beginTransaction();

            $category =Category::create($data);

            DB::commit();

        }catch(Exception $exception){
            DB::rollback();
        }

        return $category;
    }

    public function update(array $data, $id)
    {
        try{
            DB::beginTransaction();

            $category = Category::findOrFail($id);

            $category->update($data);

            DB::commit();
        }catch(Exception $exception){
            DB::rollBack();
        }
        return ($category);
    }

    public function delete($id)
    {
        try{
            DB::beginTransaction();

            $category = Category::findOrFail($id);

            $category->delete();

            DB::commit();

        }catch(Exception $exception){
            DB::rollBack();
        }
        return $category;
    }
}
