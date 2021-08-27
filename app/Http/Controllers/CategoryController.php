<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Repositories\Category\CategoryRepository;

class CategoryController extends Controller
{
    
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $categories = $this->categoryRepository->getAll();

        return $categories;
    }

    public function store(Request $request)
    {
        $category = $this->categoryRepository->create($request->all());

        return $category;
    }

    public function show(Category $category)
    {
        return $category;
    }

    public function update(Request $request, Category $category)
    {
        $category = $this->categoryRepository->update($category, $request->all(),);

        return $category;
    }

    public function destroy(Category $category)
    {
        $this->categoryRepository->delete($category);
        return response()->json([
            'message' => 'Categoria Eliminada'
        ]);
    }
}
