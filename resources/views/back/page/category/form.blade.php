@extends('back.layout.form_layout')

@php
    $title = $result->title ?? "Danh mục";
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
                    {!! Form::text('title['.$lang->code.']', 'Tiêu đề')->value( old('title.'.$lang->code, $result->getTranslation('title', $lang->code)) ) !!}
                    {!! Form::textarea('desc['.$lang->code.']', 'Mô tả ngắn')->value( old('desc.'.$lang->code, $result->getTranslation('desc', $lang->code)) ) !!}
                    {!! Form::textarea('detail['.$lang->code.']', 'Nội dung')->value( old('detail.'.$lang->code, $result->getTranslation('detail', $lang->code)) ) !!}
                </div>
            @endforeach
        </div>
    </div>
    <div class="col-md-5">
        <div class="row">
            <div class="col-md-12">
                {!! Form::text('slug', 'Đường dẫn')->value( old('slug', $result->slug) )  !!}
            </div>
            <div class="col-md-12">
                {!! Form::textarea('tags', 'Từ khóa')->value( old('tags', implode(',',$result->tags)) ) !!}
            </div>
            <div class="col-md-12">
                {!! Form::select('parent_id', 'Thuộc mục')->options($categorys->prepend('Chọn chuyên mục', ''), 'title', 'id')->value( old('parent_id', $result->parent_id)) !!}
            </div>
            <div class="col">
                @php
                    $status = collect(['0' => 'Ẩn', '1' => 'Hiện'])
                @endphp
                {!! Form::select('is_show', 'Trạng thái')->options($status)->value( old('is_show', $result->is_show)) !!}
            </div>
            <div class="col">
                {!! Form::text('pos', 'Vị trí (Nhỏ đến lớn)')->value( old('pos', $result->pos))->type('number') !!}
            </div>
        </div>
        @include('back.module.image', ['title'=>"Hình ảnh", 'name'=>"thumb", 'src'=>$result->thumb])
    </div>
@endsection
