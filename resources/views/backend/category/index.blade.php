@extends('backend.layout.master')

@section('title', 'Danh mục')

@push('styles')
<link rel="stylesheet" href="{{ asset('backend/components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endpush

@section('content')

<section class="content-header">
    <h1>
        Danh mục
        <small>
            <a href="{{ route('admin.category.create') }}" class="btn btn-block btn-xs btn-success btn-flat"><i class="fa fa-plus"></i> TẠO MỚI</a>
        </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li class="active">Danh mục</li>
    </ol>
</section>

<section class="content">
    <div class="row">

        <div class="col-xs-12">
            <div class="box">

                <div class="box-body">
                    <table id="category-table" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Ảnh</th>
                                <th>Tên</th>
                                <th>Tên không dấu</th>
                                <th>Trạng thái</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>
                                    <img src="{{ asset('images/'.$category->image) }}" alt="{{ $category->name }}" width="40px">
                                </td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>{{ $category->status ? 'Active' : 'Inactive' }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.category.edit',$category->id) }}" class="btn btn-warning btn-flat"><i class="fa fa-edit"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-danger btn-flat" onclick="event.preventDefault();
                                                        document.getElementById('category-delete-form-{{$category->id}}').submit();">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="category-delete-form-{{$category->id}}" action="{{ route('admin.category.destroy',$category->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Ảnh</th>
                                <th>Tên</th>
                                <th>Tên không dấu</th>
                                <th>Trạng thái</th>
                                <th>Hành động</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>

        </div>

    </div>
</section>

@endsection

@push('scripts')
<script src="{{ asset('backend/components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
    $(function() {
        $('#category-table').DataTable();
    })
</script>
@endpush