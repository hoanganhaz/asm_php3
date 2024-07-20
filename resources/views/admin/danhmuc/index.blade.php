@extends('admin.parials.master')
@section('content')

    <a href="{{route('admin.Category.create')}}" class="btn btn-primary">Thêm mới</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Tên danh mục</th>
        <th scope="col">Ảnh danh mục</th>
        <th scope="col">Thao Tác</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr></tr>
        <td scope="row">{{$item->id}}</td>
        <td scope="row">{{$item->name}}</td>
        <td scope="row">
            <img src="{{asset($item->cover)}}" alt="" width="70">
        </td>
        <td>
           <a href="{{route('admin.Category.show',$item)}}" class="btn btn-danger">chi tiết</a>
           <a href="{{route('admin.Category.edit',$item)}}" class="btn btn-primary">Sửa</a>
         <form action="{{route('admin.Category.destroy',$item)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-warning" type="submit">Xóa</button>
         </form>
        </td>
    </tr>
        @endforeach
    </tbody>
  </table>
  {{$data->links()}}
@endsection

