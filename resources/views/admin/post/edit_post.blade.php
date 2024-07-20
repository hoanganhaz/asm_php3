@extends('admin.parials.master')
@section('content')
<form>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Tên bài viết</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">Nhập tên Bài viết</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tiêu đề phụt</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Nhập Tiêu đề phụ</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">ảnh</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Nhập ảnh</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">nội dung</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Nhập nội dung</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">danh mục</label>
       <select name="" id="">
        <option value="">1</option>
        <option value="">2</option>
       </select>
        <div id="emailHelp" class="form-text">Nhập danh mục</div>
      </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Sửa</button>
  </form>
@endsection
