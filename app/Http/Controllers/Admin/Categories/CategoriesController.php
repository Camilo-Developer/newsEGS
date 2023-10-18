<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Models\State\State;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct(){
        $this->middleware('can:admin.categories.index')->only('index');
        $this->middleware('can:admin.categories.edit')->only('edit', 'update');
        $this->middleware('can:admin.categories.create')->only('create', 'store');
        $this->middleware('can:admin.categories.destroy')->only('destroy');
    }

    public function index(Request $request)
    {

        $search = $request->input('search');

        $categories = Category::query()
            ->where('name', 'LIKE', "%$search%")
            ->paginate(5);
        $states = State::all();

        return view('admin.categories.index',compact('categories','states','search'));
    }

    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required',
            'color' => 'required',
            'state_id' => 'required',
        ]);
        $categories = $request->all();
        Category::create($categories);
        return redirect()->route('admin.categories.index')->with('success', 'La categoria se creo correctamente.');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.index',compact('category'));

    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'color' => 'required',
            'state_id' => 'required',
        ]);
        $data = $request->all();
        $category->update($data);
        return redirect()->route('admin.categories.index')->with('edit', 'La categoria se edito correctamente.');

    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories.index')->with('delete', 'La categoria se elimino correctamente.');
    }
}
