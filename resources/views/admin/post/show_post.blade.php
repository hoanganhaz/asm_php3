@extends('admin.parials.master')
@section('content')
    <a href="{{ route('admin.Post.create') }}" class="btn btn-primary">Thêm mới</a>
    <form class="mt-5" action="{{ route('admin.Post.seach') }}" method="get">
        <select name="category_id" class="form-sekect">
            <option value="" hidden>Thể loại</option>
            @foreach ($category as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
        <input type="

        " class="form-select" name="keyword"  placeholder="Tìm kiếm...">
        <button type="submit">Search</button>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Tên bài viết</th>
                <th scope="col">Tiêu đề phụ</th>
                <th scope="col">Ảnh bài viết</th>
                <th scope="col">Nội dung</th>
                <th scope="col">Thao Tác</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($data1 as $item)
                <tr></tr>
                <td scope="row">{{ $item->id }}</td>
                <td scope="row">{{ $item->category->name }}</td>
                <td scope="row">{{ $item->name }}</td>
                <td scope="row">{{ $item->sub_title }}</td>
                <td scope="row">
                    <img src="{{ asset($item->imgage) }}" alt="" width="70">
                </td>
                <td scope="row">{{ $item->content }}</td>
                <td>
                    <a href="{{ route('admin.Post.show', $item) }}" class="btn btn-danger">chi tiết</a>
                    <a href="{{ route('admin.Post.edit', $item) }}" class="btn btn-primary">Sửa</a>
                    <form action="{{ route('admin.Post.destroy', $item) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-warning" type="submit">Xóa</button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- {{$data->links()}} --}}
@endsection
