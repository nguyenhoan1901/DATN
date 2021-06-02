@extends('back.layout.master')

@php
$isEdit = false;
$title = "Thêm dịch vụ mới";
@endphp

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
                <legend class="text-uppercase font-size-sm font-weight-bold">Thông tin cơ bản</legend>
                <div class="row">
                    <div class="col-9">
                        @include('back.page.service._form')</div>
                    <div class="col-3">
                        @include('back.module.image', ['title'=>"Icon", 'name'=>"icon", 'src'=>'', 'isEdit'=>$isEdit])
                        @include('back.module.image', ['title'=>"Hình ảnh", 'name'=>"thumbnail", 'src'=>'', 'isEdit'=>$isEdit])
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
    </form>
</div>

@endsection