@extends('backend.layout.master')

@section('title', 'Dashboard')

@push('styles')
<!-- Morris chart -->
<link rel="stylesheet" href="{{ asset('backend/components/morris.js/morris.css') }}">
<!-- jvectormap -->
<link rel="stylesheet" href="{{ asset('backend/components/jvectormap/jquery-jvectormap.css') }}">
@endpush

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <strong style="font-size: 80px; color: blue;">
        Trang chủ
    </strong>
    <p style="font-size: 40px; color: blue;">Chào mừng bạn đến với <strong style="color: red;">Tin Siêu Hot</strong></p>
    <p style="font-size: 30px; color: blue;">Chúc bạn 1 ngày tốt lành!</p>
</section>
@endsection

@push('scripts')
<!-- Morris.js charts -->
<script src="{{ asset('backend/components/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('backend/components/morris.js/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('backend/components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('backend/components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('backend/dist/js/pages/dashboard.js') }}"></script>
@endpush