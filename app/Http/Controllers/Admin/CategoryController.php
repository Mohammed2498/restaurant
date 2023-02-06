<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index',
            ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = new Category();
        return view('admin.categories.create',['category'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->rules());
        $image = $request->file('image');
        $data = $request->all();
        if ($request->hasFile('image')) {
            $image_url = $image->store('categories', 'public');
            $data['image'] = $image_url;
        }
        Category::create($data);
        return redirect()->route('admin.categories.index')
            ->with('success', 'Category added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit',
            ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate($this->rules());
        $data = $request->all();
        $image = $request->file('image');
        if ($request->hasFile('image')) {
            $image_url = $image->store('categories', 'public');
            $data['image'] = $image_url;
            Storage::disk('public')->delete($category->image);
        }
        $category->update($data);
        return redirect()->route('admin.categories.index')
            ->with('success', 'Category Edited successfully');;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if ($category->image){
            Storage::disk('public')->delete($category->image);
        }
        $category->menus()->detach();
        $category->delete();
        return redirect()->route('admin.categories.index')
            ->with('success', 'Category Deleted successfully');
    }

    public function rules()
    {
        return [
            'name' => ['required'],
            'image' => ['required', 'image'],
            'description' => ['required'],
        ];
    }
}
