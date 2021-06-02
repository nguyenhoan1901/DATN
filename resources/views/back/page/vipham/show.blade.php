@extends('back.layout.master')

@php
    $title = "Thông tin vi phạm";
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
            <h5 class="card-title">Chi tiết vi phạm</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a href="{{route('vipham.edit', $result['id'])}}" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                    <a href="{{route('vipham.delete', $result['id'])}}" onclick="return deleteConfirm()" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
                </div>
            </div>
        </div>
        <div class="card-body">
                <fieldset class="mb-3">
                    <legend class="text-uppercase font-size-sm font-weight-bold">Thông tin</legend>
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::text('user_id', 'Học viên')->value($result['name'])->readonly() !!}
                            {!! Form::textarea('noi_dung', 'Nội dung vi phạm')->value($result['noi_dung'])->readonly() !!}
                            {!! Form::date('ngay_vi_pham', 'Ngày vi phạm')->value($result['ngay_vi_pham'])->readonly() !!}
                            {!!Form::select('muc_do', 'Mức độ')->options([1 => 'Nặng', 2 => 'Bình thường', 3 => 'Nhẹ'])->disabled()!!}
                        </div>
                    </div>
                </fieldset>
        </div>
    </div>
    </form>
</div>

@endsection
