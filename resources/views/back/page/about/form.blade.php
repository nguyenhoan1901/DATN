@extends('back.layout.form_layout')

@php
    $title = $result->name ?? "Về chúng tôi";
@endphp

@section('web_title')
    {{$title}}
@endsection

@section('form_content')
    <div class="col-md-7">
        <ul class="nav nav-tabs nav-tabs-highlight mb-0">
            @foreach($global_langs as $lang)
                <li class="nav-item"><a href="#form-{{ $lang->code }}" class="nav-link {{ $loop->first ? 'active' : '' }}" data-toggle="tab">{{ $lang->title }}</a></li>
            @endforeach
        </ul>

        <div class="tab-content card card-body border-top-0 rounded-top-0 mb-0">
            @foreach($global_langs as $lang)
                <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" id="form-{{$lang->code}}">
                    {!! Form::text('title['.$lang->code.']', 'Tiêu đề')->value(old('title.'.$lang->code, $result->getTranslation('title', $lang->code)) ) !!}
                    {!! Form::textarea('desc['.$lang->code.']', 'Mô tả ngắn')->value( old('desc.'.$lang->code, $result->getTranslation('desc', $lang->code)) ) !!}
                    {!! Form::textarea('content['.$lang->code.']', 'Nội dung')->value( old('content.'.$lang->code, $result->getTranslation('content', $lang->code)) ) !!}
                    {!! Form::text('slogan['.$lang->code.']', 'Slogan')->value( old('slogan.'.$lang->code, $result->getTranslation('slogan', $lang->code)) ) !!}
                </div>
            @endforeach
        </div>
    </div>
    <div class="col-md-5">
        @include('back.module.image', ['title'=>"Hình ảnh", 'name'=>"image", 'src'=>$result->image])
    </div>
@endsection

