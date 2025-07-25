<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('backend.category.list',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // var_dump ($request->all());
        // die();
        $request->validate([
            'categoryName' => 'required',
        ]);
        
        $categoryName = $request->categoryName;

        // store into database table
        Category::create([
            'name' => $categoryName,
        ]);
        // return $categoryName;
        // redirect to list page (index)

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
            return view('backend.category.detail', compact('id'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('backend.category.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "This is " . $id . " update";
    }

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(string $id)
{
    $category = Category::findOrFail($id);
    $category->delete();
    return redirect()->route('categories.index');
}

}
