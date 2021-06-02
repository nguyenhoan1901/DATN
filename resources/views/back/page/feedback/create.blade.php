@extends('back.layout.master')

@php
    $isEdit = false;
    $title = $result->title ?? "Feedback";
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
            <h5 class="card-title">Thông tin chung</h5>
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
                        <div class="col-md-7">
                            <ul class="nav nav-tabs nav-tabs-highlight mb-0">
                                @foreach($global_langs as $lang)
                                <li class="nav-item"><a href="#form-{{ $lang->code }}" class="nav-link {{ $loop->first ? 'active' : '' }}" data-toggle="tab">{{ $lang->title }}</a></li>
                                @endforeach
                            </ul>

                            <div class="tab-content card card-body border-top-0 rounded-top-0 mb-0">
                                @foreach($global_langs as $lang)
                                <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" id="form-{{$lang->code}}">
                                    {!! Form::text('name['.$lang->code.']', 'Tên khách hàng')->value( old('name.'.$lang->code, $result->getTranslation('name', $lang->code)) ) !!}
                                    {!! Form::textarea('detail['.$lang->code.']', 'Nội dung')->value( old('detail.'.$lang->code, $result->getTranslation('detail', $lang->code)) ) !!}
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-5">
                            @include('back.module.image', ['title'=>"Hình ảnh", 'name'=>"thumb", 'src'=>$result->thumb])
                        </div>
                    </div>
                </fieldset>
        </div>
    </div>
    </form>
</div>

@endsection
