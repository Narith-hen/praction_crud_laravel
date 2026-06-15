<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the categories.
     */
    public function index()
    {
        $categories = category::all();

        return view('categories.list', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $data = $request->only(['name', 'description']);

        $data['description'] = $data['description'] ?? '';

        category::create($data);

        return redirect()->route('categories.index');
    }
    public function edit($id)
    {
        $category = category::find($id);
        return view('categories.edit', compact('category'));
    }
    public function update(Request $request, $id)
    {
        $category = category::findOrFail($id);
        $category->update($request->only(['name', 'description']));
        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/categories');
    }
}
