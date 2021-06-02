@extends('back.layout.master')

@php
    $title = "Thông tin rèn luyện";
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
            <h5 class="card-title">Chi tiết rèn luyện</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a href="{{route('renluyen.edit', $result['id'])}}" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                    <a href="{{route('renluyen.delete', $result['id'])}}" onclick="return deleteConfirm()" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
                </div>
            </div>
        </div>
        <div class="card-body">
                <fieldset class="mb-3">
                    <legend class="text-uppercase font-size-sm font-weight-bold">Thông tin</legend>
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::text('user_id', 'Học viên')->value($result['name'])->readonly() !!}
                            {!!Form::select('ket_qua', 'Kết quả rèn luyện', [1 => 'Tốt', 2 => 'Khá', 3 => 'Trung bình'])->value($result['ket_qua'])->disabled()!!}
                            {!! Form::date('thang_hien_hanh', 'Tháng hiện hành')->value($result['thang_hien_hanh'])->readonly() !!}
                        </div>
                    </div>
                </fieldset>
        </div>
    </div>
    </form>
</div>

@endsection
