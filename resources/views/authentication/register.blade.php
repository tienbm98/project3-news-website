@extends('authentication.master')

@section('title', 'Register')


@section('content')

<div class="register-box">

    <div class="register-logo">
        <a href="{{ route('home') }}">
            @if(isset($setting) && $setting['site_logo'])
            <img src="{{ asset('images/'.$setting['site_logo']) }}" alt="Logo">
            @elseif(isset($setting) && $setting['site_name'])
            {{ $setting['site_name'] }}
            @else
            Tin Siêu Hot
            @endif
        </a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Đăng kí thành viên mới</p>

        <form action="{{ route('register') }}" method="post">
            @csrf

            <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                <input type="text" name="name" class="form-control" placeholder="Họ và tên" value="{{ old('name') }}">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                @if ($errors->has('name'))
                <span class="help-block">
                    <em>{{ $errors->first('name') }}</em>
                </span>
                @endif
            </div>
            <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                <span class="help-block">
                    <em>{{ $errors->first('email') }}</em>
                </span>
                @endif
            </div>
            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                <span class="help-block">
                    <em>{{ $errors->first('password') }}</em>
                </span>
                @endif
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Nhập lại mật khẩu">
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng kí</button>
                </div>
            </div>
        </form>

        <a href="{{ route('login') }}" class="text-center">Tôi đã có tài khoản</a>
    </div>

</div>

@endsection