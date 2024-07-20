@extends('admin.parials.master')
@section('content')
<form action="{{route('admin.Post.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="category_id" class="form-label">danh mục</label>
       <select class="form-select" name="category_id" id="category_id">
        @foreach ($category as $id => $name)
                <option value="{{$id}}">{{$name}}</option>
        @endforeach
       </select>
        <div id="emailHelp" class="form-text">Nhập danh mục</div>
      </div>
    <div class="mb-3">
      <label for="name" class="form-label">Tên bài viết</label>
      <input type="text" class="form-control" id="name" aria-describedby="name" name="name">
    </div>

    <div class="mb-3">
        <label for="sub_title" class="form-label">Tiêu đề phụ</label>
        <input type="text" class="form-control" id="sub_title" aria-describedby="sub_title" name="sub_title">
        <div id="emailHelp" class="form-text">Nhập Tiêu đề phụ</div>
      </div>
      <div class="mb-3">
        <label for="imgage" class="form-label">ảnh</label>
        <input type="file" class="form-control" id="imgage" aria-describedby="imgage" name="imgage">
        <div id="emailHelp" class="form-text">Nhập ảnh</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">nội dung</label>
        <textarea class="form-control" id="content" cols="30" rows="10" name="content"></textarea>
        <div id="emailHelp" class="form-text">Nhập nội dung</div>
      </div>

    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
