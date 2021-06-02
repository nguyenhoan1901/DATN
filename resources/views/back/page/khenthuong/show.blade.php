@extends('back.layout.master')

@php
    $title = "Thông tin khen thưởng";
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
            <h5 class="card-title">Chi tiết khen thưởng</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a href="{{route('khenthuong.edit', $result['id'])}}" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                    <a href="{{route('khenthuong.delete', $result['id'])}}" onclick="return deleteConfirm()" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
                </div>
            </div>
        </div>
        <div class="card-body">
                <fieldset class="mb-3">
                    <legend class="text-uppercase font-size-sm font-weight-bold">Thông tin</legend>
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::text('user_id', 'Học viên')->value($result['name'])->readonly() !!}
                            {!! Form::textarea('noi_dung', 'Nội dung khen thưởng')->value($result['noi_dung'])->readonly() !!}
                            {!! Form::date('ngay_khen_thuong', 'Ngày khen thưởng')->value($result['ngay_khen_thuong'])->readonly() !!}
                        </div>
                    </div>
                </fieldset>
        </div>
    </div>
    </form>
</div>

@endsection
