@extends('backend.layout.master')

@section('title', 'Thêm danh mục')

@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/plugins/iCheck/square/blue.css') }}">
@endpush

@section('content')

    <section class="content-header">
        <h1>
        Thêm danh mục
            <small><a href="{{ route('admin.category.index') }}" class="btn btn-block btn-xs btn-warning btn-flat"><i class="fa fa-plus"></i> QUAY LẠI</a></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li class="active">Thêm danh mục</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">

            <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data" role="form">
                @csrf

                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Thêm danh mục</h3>
                        </div>

                        <div class="box-body">
                            <div class="form-group">
                                <label for="categoryname">Tên danh mục</label>
                                <input type="text" name="name" class="form-control" id="categoryname">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Ảnh</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <input type="file" name="image" id="categoryimage">
                                <p class="help-block">(Ảnh phải có định dạng .png or .jpg)</p>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="status"> Hoạt động
                                </label>
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-flat">Thêm danh mục</button>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </section>

@endsection

@push('scripts')
    <!-- iCheck -->
    <script src="{{ asset('backend/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue'
            });
        });
    </script>
@endpush