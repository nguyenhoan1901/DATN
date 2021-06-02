@extends('back.layout.master')

@php
    $title = $result->name ?? "Đối tác";
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
                                    {!! Form::text('name['.$lang->code.']', 'Tên đối tác')->value( old('name.'.$lang->code, $result->getTranslation('name', $lang->code)) ) !!}
                                </div>
                                @endforeach
                                {!! Form::text('link', 'Đường dẫn')->value( old('link', $result->link) ) !!}
                            </div>
                        </div>
                        <div class="col-md-5">
                            @include('back.module.image', ['title'=>"Logo", 'name'=>"thumb", 'src'=>$result->thumb])
                        </div>
                    </div>
                </fieldset>
        </div>
    </div>
    </form>
</div>

@endsection
