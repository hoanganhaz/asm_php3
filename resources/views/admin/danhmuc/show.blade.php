@extends('admin.parials.master')
@section('content')
    <h1>Chi tiết sản phẩm</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Field Name</th>
                <th scope="col">Value</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($Category->toArray() as $field => $value)
             {{-- ten biến phải trùng với tên biến hàm compat --}}

                <tr></tr>
                <td scope="row">{{ ucfirst($field) }}</td>
                <td scope="row">
                    @if ($field == 'cover')
                        <img src="{{ asset($value) }}" alt="" width="70">
                    @else
                        {{ $value }}
                    @endif
                </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    <td>
        <a href="{{route('admin.Category.index')}}" class="btn btn-danger">Quay lại</a>
    </td>
    {{-- {{$data->links()}} --}}
@endsection
