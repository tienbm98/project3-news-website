@extends('backend.layout.master')

@section('title', 'Profile')

@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/plugins/iCheck/square/blue.css') }}">
@endpush

@section('content')

    <section class="content-header">
        <h1>
        Trang cá nhân của {{ auth()->user()->name }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li class="active">Cập nhật thông tin</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">

            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Cập nhật thông tin</h3>
                    </div>

                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" role="form">
                        @csrf

                        <div class="box-body">
                            <div class="form-group">
                                <label for="editusername">Họ và tên</label>
                                <input type="text" name="name" class="form-control" id="editusername" value="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <label for="edituseremail">Email</label>
                                <input type="email" name="email" class="form-control" id="edituseremail" value="{{ $user->email }}">
                            </div>
                            <div class="box-img">
                                <img src="{{ asset('images/'.$user->photo) }}" alt="{{ $user->name }}" class="img-responsive">
                            </div>
                            <div class="form-group">
                                <label for="newsimage">Ảnh</label>
                                <input type="file" name="photo" id="newsimage">
                                <p class="help-block">(Ảnh phải có định dạng .png or .jpg)</p>
                            </div>
                            <hr>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="status" {{ $user->status ? 'checked' : '' }}> Kích hoạt
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
                        <h3 class="box-title">Thay đổi mật khẩu</h3>
                    </div>
                    <form action="{{ route('profile.changepassword') }}" method="POST" role="form">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="currentpassword">Mật khẩu hiện tại</label>
                                <input type="password" name="currentpassword" class="form-control" id="currentpassword">
                            </div>
                            <div class="form-group">
                                <label for="newpassword">Mật khẩu mới</label>
                                <input type="password" name="newpassword" class="form-control" id="newpassword">
                            </div>
                            <div class="form-group">
                                <label for="newpasconfirm">Nhập lại mật khẩu mới</label>
                                <input type="password" name="newpassword_confirmation" class="form-control" id="newpasconfirm">
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-flat">Thay đổi mật khẩu</button>
                        </div>
                    </form>
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