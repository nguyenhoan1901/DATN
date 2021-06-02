@extends('back.layout.master')

@php
    $title = "Thông tin User";
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
            <h5 class="card-title">Thông tin User</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <button type="submit" class="btn btn-success text-white">Lưu</button>
                </div>
            </div>
        </div>
        <div class="card-body">
                <fieldset class="mb-3">
                    <legend class="text-uppercase font-size-sm font-weight-bold">Thông tin cơ bản</legend>
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::text('name', 'Họ tên')->value($result->name) !!}
                            {!! Form::text('username', 'User name')->value($result->username) !!}
                            {!!Form::text('password', 'Password')->type('password')->value($result->password)!!}
                            {!!Form::text('email', 'Your email')->type('email')->value($result->email)!!}
                            {!!Form::text('nam_vao_truong', 'Năm vào trường')->value($result->nam_vao_truong)!!}
                            {!!Form::text('bac_dao_tao', 'Bậc đào tạo')->value($result->bac_dao_tao)!!}
                            {!!Form::text('chuong_trinh_dao_tao', 'Chương trình đào tạo')->value($result->chuong_trinh_dao_tao)!!}
                            {!!Form::text('khoa', 'Khoa/Viện quản lý')->value($result->khoa)!!}
                            {!!Form::text('lop', 'Lớp')->value($result->lop)!!}
                            {!!Form::text('tinh_trang_hoc_tap', 'Tình trạng học tập')->value($result->tinh_trang_hoc_tap)!!}
                            {!!Form::select('gioi_tinh', 'Giới tính',['Nam'=>'Nam','Nữ'=>'Nữ'])->value($result->gioi_tinh)!!}
                            {!!Form::text('khoa_hoc', 'Khóa học')->value($result->email)!!}
                            {!!Form::checkbox('is_admin', 'Admin')->checked($result->is_admin ?? 0)!!}
                            @include('back.module.image', ['title'=>"Avatar", 'name'=>"thumb", 'src'=>$result->thumb])
                        </div>
                    </div>
                </fieldset>
        </div>
    </div>
    </form>
</div>

@endsection
