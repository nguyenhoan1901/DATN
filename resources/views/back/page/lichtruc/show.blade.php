@extends('back.layout.master')

@php
    $title = "Thông tin lịch học";
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
            <h5 class="card-title">Chi tiết lịch học</h5>
            <div class="header-elements">
                <div class="list-icons">
                    @if(!$result['status'] || $result['status'] == 0 || $currentUser->is_admin == 1)
                        <a href="{{route('lichhoc.edit', $result['id'])}}" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                        <a href="{{route('lichhoc.delete', $result['id'])}}" onclick="return deleteConfirm()" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
                    @endif

                </div>
            </div>
        </div>
        <div class="card-body">
                <fieldset class="mb-3">
                    <legend class="text-uppercase font-size-sm font-weight-bold">Thông tin</legend>
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::text('user_id', 'Học viên')->value($result['name'])->readonly() !!}
                            {!! Form::text('hoc_ky', 'Học kỳ')->value($hockys[$result['hoc_ky']])->readonly() !!}
                            {!!Form::date('ngay_bat_dau', 'Ngày bắt đầu')->value($result['ngay_bat_dau'])->readonly() !!}
                            {!!Form::date('ngay_ket_thuc', 'Ngày kết thúc')->value($result['ngay_ket_thuc'])->readonly() !!}
                            {!!Form::textarea('chi_tiet', 'Chi tiết lịch học')->value($result['chi_tiet'])->readonly()!!}
                        </div>
                    </div>
                </fieldset>
        </div>
    </div>
    </form>
</div>

@endsection
