@extends('back.layout.master')

@php
$isEdit = true;
$title = $result->title;
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
            <div class="row">
                <div class="col-md-9">
                    @include('back.page.service._form')</div>
                <div class="col-md-3">
                    @include('back.module.image', ['title'=>"Icon", 'name'=>"icon", 'src'=>'uploads/service/'.$result->icon, 'isEdit'=>$isEdit])
                    @include('back.module.image', ['title'=>"Hình ảnh", 'name'=>"thumbnail", 'src'=>'uploads/service/'.$result->thumbnail, 'isEdit'=>$isEdit])
                </div>
            </div>
        </div>
    </div>
    </form>
</div>

@endsection