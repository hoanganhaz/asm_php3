<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::query()->select('id', 'name')->get();
        $data1 = Post::query()->with('category')->latest('id')->paginate(); //latest'lấy bản ghi mới nhất'|paginate là phân trang
        return view('admin.Post.index', compact('data1','category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::query()->pluck('name', 'id')->all(); // kết nối lấy name và id từ bảng category
        return view('admin.Post.create_post', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('imgage'); //các trường liên quan đến ảnh phải dùng except
        if ($request->hasFile('imgage')) {
            $pathFile = Storage::putFile('Post', $request->file('imgage'));
            $data['imgage'] = 'storage/' . $pathFile;
        }
        Post::query()->create($data);
        return redirect()->route('admin.Post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $Post)
    {
        return view('admin.post.show_post', compact('Post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function seach(request $request)
    {

        $category = Category::query()->select('id', 'name')->get();
        $categoriesID = $request->input('category_id');


        $keyword = $request->input('keyword');

        if ($keyword && !$categoriesID) {
            $data1 = Post::query()->where('content', 'LIKE', "%{$keyword}%")->get();
        }
        if (!$keyword && $categoriesID) {
            $data1 = Post::query()->where('category_id', $categoriesID)->get();
        }
        // if ($keyword && $categoriesID) {
        //     $posts = Post::query()->where('title', 'LIKE', "%{$keyword}%")
        //         ->where('category_id', $categoriesID)
        //         ->get();
        // }



        return view('admin.Post.seach', compact('data1', 'category'));
    }

}
