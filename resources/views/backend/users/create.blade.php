@extends('backend.layout.master')

@section('title', 'Thêm thành viên')

@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/plugins/iCheck/square/blue.css') }}">
@endpush

@section('content')

    <section class="content-header">
        <h1>
        Thêm thành viên
            <small><a href="{{ route('admin.users.index') }}" class="btn btn-block btn-xs btn-warning btn-flat"><i class="fa fa-plus"></i> QUAY LẠI</a></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li class="active">Thêm thành viên</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">

            <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data" role="form">
                @csrf

                <div class="col-md-6">
                    <div class="box box-primary">

                        <div class="box-header with-border">
                            <h3 class="box-title">Thêm thành viên</h3>
                        </div>

                        <div class="box-body">
                            <div class="form-group">
                                <label for="username">Tên thành viên</label>
                                <input type="text" name="name" class="form-control" id="username">
                            </div>
                            <div class="form-group">
                                <label for="useremail">Email</label>
                                <input type="email" name="email" class="form-control" id="useremail">
                            </div>
                            <div class="form-group">
                                <label for="userpassword">Mật khẩu</label>
                                <input type="password" name="password" class="form-control" id="userpassword">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Vai trò</label>
                                <select name="role_id" class="form-control" style="width: 100%;">
                                    <option value="3">Thành viên</option>
                                    <option value="2">Biên tập viên</option>
                                    <option value="1">Quản trị viên</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="userimage">Ảnh đại diện</label>
                                <input type="file" name="photo" id="userimage">
                                <p class="help-block">(Ảnh phải có định dạng .png or .jpg)</p>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="status"> Kích hoạt
                                </label>
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-flat">Thêm thành viên</button>
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