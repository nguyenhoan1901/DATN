@extends('back.layout.master')

@php
    $title = "Thông tin kết quả thể lực";
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
                    <button type="submit" class="btn btn-success text-white">Lưu</button>
                </div>
            </div>
        </div>
        <div class="card-body">
                <fieldset class="mb-3">
{{--                    <legend class="text-uppercase font-size-sm font-weight-bold">Thông tin cơ bản</legend>--}}
                    <div class="row">
                        <div class="col-md-12">
                            {!!Form::select('user_id', 'Học viên')->options($users)->value($result['user_id'])!!}
                            {!!Form::select('ket_qua', 'Kết quả rèn luyện', [1 => 'Tốt', 2 => 'Khá', 3 => 'Trung bình'])->value($result['ket_qua'])!!}
                            {!! Form::date('ngay_cap_nhat', 'Ngày cập nhật')->value($result['ngay_cap_nhat']) !!}
                        </div>
                    </div>
                </fieldset>
        </div>
    </div>
    </form>
</div>

@endsection
