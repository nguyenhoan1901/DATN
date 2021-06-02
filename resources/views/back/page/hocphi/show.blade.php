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
            <h5 class="card-title">Chi tiết học phí</h5>
            <div class="header-elements">
                <div class="list-icons">
                    @if(!$result['status'] || $result['status'] == 0 || $currentUser->is_admin == 1)
                        <a href="{{route('hocphi.edit', $result['id'])}}" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                        <a href="{{route('hocphi.delete', $result['id'])}}" onclick="return deleteConfirm()" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
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
                            {!! Form::text('hoc_phi', 'Học phí')->value($result['hoc_phi'])->readonly() !!}
                            {!! Form::select('trang_thai', 'Trạng thái')->options([1 => 'Đã hoàn thành', 2 => 'Đang xử lý', 3 => 'Chưa hoàn thành'])->disabled() !!}
                        </div>
                    </div>
                </fieldset>
        </div>
    </div>
    </form>
</div>

@endsection
