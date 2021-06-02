@extends('back.layout.form_layout')

@php
    $title = $result->title ?? "Trang";
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
            {!! Form::text('slug', 'Đường dẫn')->value( old('slug', $result->slug) ) !!}
            @foreach($global_langs as $lang)
                <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" id="form-{{$lang->code}}">
                    {!! Form::text('title['.$lang->code.']', 'Tiêu đề')->value( old('title.'.$lang->code, $result->getTranslation('title', $lang->code)) ) !!}
                    {!! Form::textarea('desc['.$lang->code.']', 'Mô tả ngắn')->value( old('desc.'.$lang->code, $result->getTranslation('desc', $lang->code)) ) !!}
                    {!! Form::textarea('detail['.$lang->code.']', 'Nội dung')->value( old('detail.'.$lang->code, $result->getTranslation('detail', $lang->code)) ) !!}
                </div>
            @endforeach
            {!! Form::textarea('tags', 'Từ khóa')->value( old('tags', implode(',',$result->tags)) ) !!}
        </div>
    </div>
    <div class="col-md-5">
        <div class="row">
            <div class="col-md-12">
                @php
                    if($result->id){
                        foreach ($global_pages as $key => $value) {
                            if($result->id == $key){
                                unset($global_pages[$key]);
                            }
                        }
                    }
                @endphp

                {!! Form::select('parent_id', 'Thuộc mục')->options($global_pages)->value( old('parent_id', $result->parent_id)) !!}
            </div>
            <div class="col">
                @php
                    $status = collect(['0' => 'Ẩn', '1' => 'Hiện'])
                @endphp
                {!! Form::select('show', 'Trạng thái')->options($status)->value( old('target', $result->show)) !!}
            </div>
            <div class="col">
                {!! Form::text('pos', 'Vị trí (Nhỏ đến lớn)')->value( old('pos', $result->pos))->type('number') !!}
            </div>
        </div>
        @include('back.module.image', ['title'=>"Hình ảnh", 'name'=>"thumb", 'src'=>$result->thumb])
    </div>
@endsection
