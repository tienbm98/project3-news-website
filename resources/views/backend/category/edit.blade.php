@extends('backend.layout.master')

@section('title', 'Sửa danh mục')

@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/plugins/iCheck/square/blue.css') }}">
@endpush

@section('content')

    <section class="content-header">
        <h1>
        Sửa danh mục
            <small><a href="{{ route('admin.category.index') }}" class="btn btn-block btn-xs btn-warning btn-flat"><i class="fa fa-plus"></i> QUAY LẠI</a></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li class="active">Sửa danh mục</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">

            <div class="col-md-6">

                <div class="box box-primary">

                    <div class="box-header with-border">
                        <h3 class="box-title">Sửa danh mục</h3>
                    </div>

                    <form action="{{ route('admin.category.update',$category->id) }}" method="POST" enctype="multipart/form-data" role="form">
                        @csrf
                        @method('PUT')

                        <div class="box-body">
                            <div class="form-group">
                                <label for="categoryname">Tên danh mục</label>
                                <input type="text" name="name" class="form-control" value="{{ $category->name }}" id="categoryname">
                            </div>
                            <div class="form-group">
                                <label for="categoryimage">Ảnh</label>
                                <input type="file" name="image" id="categoryimage">
                                <p class="help-block">(Ảnh phải có định dạng .png or .jpg)</p>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="status" {{ $category->status ? 'checked' : '' }}> Hoạt động
                                </label>
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-flat">Cập nhật</button>
                        </div>
                    </form>
                </div>

            </div>

            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Ảnh</h3>
                    </div>
                    <div class="box-body">
                        <img src="{{ asset('images/'.$category->image) }}" alt="{{ $category->name }}" class="img-responsive">
                    </div>
                </div>
            </div>

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