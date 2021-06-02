@extends('back.layout.master')

@php
    $title = "Thông tin thể lực";
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
            <h5 class="card-title">Chi tiết thể lực</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a href="{{route('theluc.edit', $result['id'])}}" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                    <a href="{{route('theluc.delete', $result['id'])}}" onclick="return deleteConfirm()" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
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
                            {!! Form::date('ngay_cap_nhat', 'Ngày cập nhật')->value($result['ngay_cap_nhat'])->readonly() !!}
                        </div>
                    </div>
                </fieldset>
        </div>
    </div>
    </form>
</div>

@endsection
