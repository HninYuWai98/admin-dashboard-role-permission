<?php

namespace App\Services\Category;

use Exception;
use App\Models\Category\Category;
use App\Repositories\Category\CategoryRepositoryInterface;
use Illuminate\Support\Facades\DB;

class CategoryService
{
    protected CategoryRepositoryInterface $categoryRepository;

    public function __construct(
        CategoryRepositoryInterface $categoryRepository
    )
    {
        $this->categoryRepository = $categoryRepository;
    }
    public function getAllCategory()
    {

        $categories = $this->categoryRepository->all();

        return $categories;
    }

    public function storeCategory($data)
    {

        $category = $this->categoryRepository->create($data);

        return $category;

    }

    public function editCategory($id)
    {
        $category = Category::findOrFail($id);

        return $category;
    }

    public function updateCategory($data, $id)
    {
        $category = $this->categoryRepository->update($data, $id);

        return $category;

    }

    public function deleteCategory($id)
    {
        $category = $this->categoryRepository->delete($id);

        return $category;
    }
}
