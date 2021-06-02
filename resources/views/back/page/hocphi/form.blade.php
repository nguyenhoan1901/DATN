@extends('back.layout.master')

@php
    $title = "Thông tin học phí";
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
                    @if(!$result['status'] || $result['status'] == 0)
                        <input type="submit" class="btn btn-success text-white" name="confirm" value="Lưu">
                        <input type="submit" class="btn btn-success text-white" name="confirm" value="Gửi duyệt" style="background-color: cornflowerblue">
                    @elseif($result['status'] == 1 && $currentUser->is_admin == 1)
                        <input type="submit" class="btn btn-success text-white" name="confirm" value="Duyệt" style="background-color: brown">
                    @elseif($result['status'] == 2 && $currentUser->is_admin == 1)
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
                            {!!Form::select('user_id', 'Học viên')->options($users)->value($result['user_id'])!!}
                            {!! Form::select('hoc_ky', 'Học kỳ')->options($hockys)!!}
                            {!! Form::text('hoc_phi', 'Học phí')->value($result['hoc_phi']) !!}
                            {!!Form::select('trang_thai', 'Trạng thái')->options([1 => 'Đã hoàn thành', 2 => 'Đang xử lý', 3 => 'Chưa hoàn thành'])!!}

                        </div>
                    </div>
                </fieldset>
        </div>
    </div>
    </form>
</div>

@endsection
