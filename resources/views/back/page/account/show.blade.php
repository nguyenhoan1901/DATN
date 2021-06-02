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
            <h5 class="card-title">Chi tiết thông tin sinh viên</h5>
            <div class="header-elements">
                <div class="list-icons">
                    @if(!$result['status'] || $result['status'] == 0 || $currentUser->is_admin == 1)
                        <a href="{{route('account.edit', $result['id'])}}" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                        <a href="{{route('account.delete', $result['id'])}}" onclick="return deleteConfirm()" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
                    @endif

                </div>
            </div>
        </div>
        <div class="card-body">
                <fieldset class="mb-3">
                    <legend class="text-uppercase font-size-sm font-weight-bold">Thông tin</legend>
                    <div class="row">
                        <div class="col-md-12">
                            {!!Form::text('user_id', 'Học viên')->value($result['name'])->readonly()!!}
                            {!! Form::text('dan_toc', 'Dân tộc')->value($result['dan_toc'])->readonly() !!}
                            {!! Form::text('dia_chi', 'Địa chỉ')->value($result['dia_chi'])->readonly() !!}
                            {!! Form::text('nam_thi_thpt', 'Năm thi THPT')->value($result['nam_thi_thpt'])->readonly() !!}
                            {!! Form::text('cmtnd', 'Số CMTND')->value($result['cmtnd'])->readonly() !!}
                            {!! Form::text('noi_cap', 'Nơi cấp')->value($result['noi_cap'])->readonly() !!}
                            {!! Form::text('email', 'Email')->value($result['email'])->readonly() !!}
                            {!! Form::text('ton_giao', 'Tôn giáo')->value($result['ton_giao'])->readonly() !!}
                            {!! Form::text('ho_khau', 'Hộ khẩu thường trú')->value($result['ho_khau'])->readonly() !!}
                            {!! Form::text('truong_thpt', 'Trường THPT')->value($result['truong_thpt'])->readonly() !!}
                            {!! Form::text('hoten_bo', 'Họ tên bố')->value($result['hoten_bo'])->readonly() !!}
                            {!! Form::text('namsinh_bo', 'Năm sinh')->value($result['namsinh_bo'])->readonly() !!}
                            {!! Form::text('nghenghiep_bo', 'Nghề nghiệp')->value($result['nghenghiep_bo'])->readonly() !!}
                            {!! Form::text('sdt_bo', 'Số điện thoại')->value($result['sdt_bo'])->readonly() !!}
                            {!! Form::text('hoten_me', 'Họ tên mẹ')->value($result['hoten_me'])->readonly() !!}
                            {!! Form::text('namsinh_me', 'Năm sinh')->value($result['namsinh_me'])->readonly() !!}
                            {!! Form::text('nghenghiep_me', 'Nghề nghiệp')->value($result['nghenghiep_me'])->readonly() !!}
                            {!! Form::text('sdt_me', 'Số điện thoại')->value($result['sdt_me'])->readonly() !!}
                        </div>
                    </div>
                </fieldset>
        </div>
    </div>
    </form>
</div>

@endsection
