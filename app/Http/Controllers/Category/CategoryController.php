<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

use App\Models\Category\Category;

class CategoryController extends Controller
{


  public function index(Request $request): View
  {
    //search input
    $searchVal = $request->search ?? null;

    // paginate with query
    $categories = Category::where('category_name', 'LIKE', '%'.$searchVal.'%')->paginate(5)->withQueryString();

    return view('category.index', compact('categories', 'searchVal'));
  }

  public function create()
  {
    //
    return view('category.create');
  }

  public function store(StoreCategoryRequest $request): RedirectResponse
  {
    // Retrieve the validated input...
    $validated = $request->validated();

    // store new User to database
    $category                        = new Category;
    $category->category_name         = $validated['category_name'];
    $category->description           = $validated['description'];
    $category->save();
    return redirect()->route('categories.index')->with('status', 'Category has been successfully added.');
  }

  public function show(Category $category): View
  {
    return view('category.show', compact('category'));
  }

  public function edit(Category $category)
  {
    return view('category.edit', compact('category'));
  }

  public function update(UpdateCategoryRequest $request, Category $category): RedirectResponse
  {
    // Retrieve the validated input...
    $validated = $request->validated();

    // update User
    $category->category_name        = $validated['category_name'];
    $category->description          = $validated['description'];

    $category->update();

    // redirect to users page
    return redirect()->route('categories.index')->with('status', 'Category has been successfully updated.');
  }

  public function destroy(Category $category): RedirectResponse
  {
    // delete User
    $category->delete();

    // redirect to users page
    return redirect()->route('categories.index')->with('status', 'Oh naurr! Category has been successfully deleted.');
  }


}
