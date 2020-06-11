<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Service\CategoryService;
use App\Http\Service\PetService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    function index()
    {
        $categories = $this->categoryService->paginate(5);
        return view('categories.list', compact('categories'));
    }

    function create(PetService $petService)
    {
        $pets = $petService->all();
        return view('categories.create', compact('pets'));
    }

    function store(CategoryRequest $categoryRequest)
    {
        $this->categoryService->store($categoryRequest);
        return redirect()->route('categories.index');
    }

    function edit($id, PetService $petService)
    {
        $pets = $petService->all();
        $category = $this->categoryService->findOrFail($id);
        return view('categories.edit', compact(['pets', 'category']));
    }

    function update($id, CategoryRequest $categoryRequest) {
        $this->categoryService->update($id, $categoryRequest);
        return redirect()->route('categories.index');
    }

    function delete($id) {
        $this->categoryService->delete($id);
        return redirect()->route('categories.index');
    }
}
