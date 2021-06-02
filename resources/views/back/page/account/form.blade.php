@extends('back.layout.master')

@php
    $title = "Thông tin sinh viên";
@endphp

@section('web_title')
    {{$title}}
@endsection


@section('content')
<div class="content">

    <!-- Form inputs -->
    <form action="" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">{{$title}}</h5>
            <div class="header-elements">
                <div class="list-icons">
                    @php
                        $status = $result['status'] ? $result['status'] : '';
                    @endphp
                    @if(!$status || $status == 0)
                        <input type="submit" class="btn btn-success text-white" name="confirm" value="Lưu">
                        <input type="submit" class="btn btn-success text-white" name="confirm" value="Gửi duyệt" style="background-color: cornflowerblue">
                    @elseif($status == 1 && $currentUser->is_admin == 1)
                        <input type="submit" class="btn btn-success text-white" name="confirm" value="Duyệt" style="background-color: brown">
                    @elseif($status == 2 && $currentUser->is_admin == 1)
                        <input type="submit" class="btn btn-success text-white" name="confirm" value="Cập nhật">
                    @endif
                </div>
            </div>
        </div>
        <div class="card-body">
                <fieldset class="mb-3">
{{--                    <legend class="text-uppercase font-size-sm font-weight-bold">Thông tin cơ bản</legend>--}}
                    <div class="row">
                        <div class="col-md-12">
                            {!!Form::select('user_id', 'Học viên')->options($users)->value($result['user_id'] ? $result['user_id'] : '')!!}
                            {!! Form::text('dan_toc', 'Dân tộc')->value($result['dan_toc'] ? $result['dan_toc'] : '') !!}
                            {!! Form::text('dia_chi', 'Địa chỉ')->value($result['dia_chi'] ? $result['dia_chi'] : '') !!}
                            {!! Form::text('nam_thi_thpt', 'Năm thi THPT')->value($result['nam_thi_thpt'] ? $result['nam_thi_thpt'] : '') !!}
                            {!! Form::text('cmtnd', 'Số CMTND')->value($result['cmtnd'] ? $result['cmtnd'] : '') !!}
                            {!! Form::text('noi_cap', 'Nơi cấp')->value($result['noi_cap'] ? $result['noi_cap'] : '') !!}
                            {!! Form::text('email', 'Email')->value($result['email'] ? $result['email'] : '') !!}
                            {!! Form::text('ton_giao', 'Tôn giáo')->value($result['ton_giao'] ? $result['ton_giao'] : '') !!}
                            {!! Form::text('ho_khau', 'Hộ khẩu thường trú')->value($result['ho_khau'] ? $result['ho_khau'] : '') !!}
                            {!! Form::text('truong_thpt', 'Trường THPT')->value($result['truong_thpt'] ? $result['truong_thpt'] : '') !!}
                            {!! Form::text('hoten_bo', 'Họ tên bố')->value($result['hoten_bo'] ? $result['hoten_bo'] : '') !!}
                            {!! Form::text('namsinh_bo', 'Năm sinh')->value($result['namsinh_bo'] ? $result['namsinh_bo'] : '') !!}
                            {!! Form::text('nghenghiep_bo', 'Nghề nghiệp')->value($result['nghenghiep_bo'] ? $result['nghenghiep_bo'] : '') !!}
                            {!! Form::text('sdt_bo', 'Số điện thoại')->value($result['sdt_bo'] ? $result['sdt_bo'] : '') !!}
                            {!! Form::text('hoten_me', 'Họ tên mẹ')->value($result['hoten_me'] ? $result['hoten_me'] : '') !!}
                            {!! Form::text('namsinh_me', 'Năm sinh')->value($result['namsinh_me'] ? $result['namsinh_me'] : '') !!}
                            {!! Form::text('nghenghiep_me', 'Nghề nghiệp')->value($result['nghenghiep_me'] ? $result['nghenghiep_me'] : '') !!}
                            {!! Form::text('sdt_me', 'Số điện thoại')->value($result['sdt_me'] ? $result['sdt_me'] : '') !!}
                        </div>
                    </div>
                </fieldset>
        </div>
    </div>
    </form>
</div>

@endsection
