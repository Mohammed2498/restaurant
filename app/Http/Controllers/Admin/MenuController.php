<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menus.index', ['menus' => $menus]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $menu = new Menu();
        return view('admin.menus.create', ['menu' => $menu,
            'categories' => $categories]);
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
            $image_url = $image->store('menus', 'public');
            $data['image'] = $image_url;
        }
        $menu = Menu::create($data);
        if ($request->has('categories')) {
            $menu->categories()->attach($request->categories);
        }
        return redirect()->route('admin.menus.index')
            ->with('success', 'Menu added successfully');
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
    public function edit(Menu $menu)
    {
        $categories = Category::all();
        return view('admin.menus.edit',
            ['menu' => $menu, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $request->validate($this->rules());
        $data = $request->all();
        $image = $request->file('image');
        if ($request->hasFile('image')) {
            $image_url = $image->store('menus', 'public');
            $data['image'] = $image_url;
            Storage::disk('public')->delete($menu->image);
        }
        $menu->update($data);
        if ($request->has('categories')) {
            $menu->categories()->sync($request->categories);
        }
        return redirect()->route('admin.menus.index')
            ->with('success', 'Menu Edited successfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        if ($menu->image) {
            Storage::disk('public')->delete($menu->image);
        }
        $menu->delete();
        return redirect()->route('admin.menus.index')
            ->with('success', 'Menu Deleted successfully');
    }

    public function rules()
    {
        return [
            'name' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
            'image' => ['required', 'image'],
        ];
    }
}
