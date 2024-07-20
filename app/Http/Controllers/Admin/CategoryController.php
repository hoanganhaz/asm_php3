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
     */
    public function index()
    {
        $data = Category::query()->latest('id')->paginate(); //latest'lấy bản ghi mới nhất'|paginate là phân trang
        return view('admin.danhmuc.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::query()->pluck('name', 'id')->all();
        return view('admin.danhmuc.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('cover'); //các trường liên quan đến ảnh phải dùng except
        if ($request->hasFile('cover')) {
            $pathFile = Storage::putFile('Category', $request->file('cover'));
            $data['cover'] = 'storage/' . $pathFile;
        }
        Category::query()->create($data);
        return redirect()->route('admin.Category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $Category)
    {

        return view('admin.danhmuc.show', compact('Category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $Category)
    {

        $category = Category::query()->pluck('name', 'id')->all();
        return view('admin.danhmuc.edit', compact('Category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $Category)
    {
        $data = $request->except('cover'); //các trường liên quan đến ảnh phải dùng except
        if ($request->hasFile('cover')) {
            $pathFile = Storage::putFile('Category', $request->file('cover'));
            $data['cover'] = 'storage/' . $pathFile;
        }
        $currentCover = $Category->cover;
        $Category->update($data);
        if (
            $request->hasFile('cover')
            && $currentCover
            && file_exists(public_path($currentCover))
        ) {
            unlink(public_path($currentCover));
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $Category)
    {
        $Category->delete();
        if (
            $Category->cover
            && file_exists(public_path($Category->cover))
        ) {
            unlink(public_path($Category->cover));
        }
        return redirect()->route('admin.Category.index');

    }
}
