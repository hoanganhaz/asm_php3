@extends('admin.parials.master')
@section('content')
<form action="{{route('admin.Category.update',$Category)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
     {{-- update phải khai báo thêm put --}}
    <div class="mb-3">
      <label for="name" class="form-label">Tên Danh mục</label>
      <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" value="{{$Category->name}}">
      <div id="emailHelp" class="form-text">Nhập tên danh mục</div>
    </div>
    <div class="mb-3">
        <label for="cover" class="form-label">Ảnh Danh mục</label>
        <input type="file" class="form-control" id="cover" aria-describedby="cover" name="cover">
        <img src="{{asset($Category->cover)}}" alt="" width="70px">
        <div id="emailHelp" class="form-text">Chọn ảnh danh mục</div>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
