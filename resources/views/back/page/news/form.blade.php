@extends('back.layout.form_layout')

@php
    $title = $result->title ?? "Bài viết";
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
            <div class="col-12">
                {!! Form::text('slug', 'Đường dẫn')->value( old('slug.'.$lang->code, $result->slug) ) !!}
            </div>
            <div class="col-12">
                {!! Form::text('tags', 'Từ khóa')->value( old('tags', implode(',',$result->tags)) ) !!}
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="category_id" class="">Chuyên mục</label>
                    <select name="category_id[]" class="form-control" multiple>
                        @php
                            $cat_selected = array();
                            if($result->categorys && count($result->categorys)){
                                $cat_selected = $result->categorys->pluck('category_id')->toArray();
                            }
                        @endphp
                        @foreach($categorys as $cat)
                        <option value="{{$cat->id}}" {{ in_array($cat->id, $cat_selected) ? 'selected' : '' }}>{{ $cat->title }}</option>
                            @if($cat->children)
                                @foreach($cat->children as $cat_child)
                                    <option value="{{$cat_child->id}}" {{ in_array($cat_child->id, $cat_selected) ? 'selected' : '' }}>-- {{ $cat_child->title }}</option>
                                @endforeach
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @php
                    $status = collect(['0' => 'Ẩn', '1' => 'Hiện'])
                @endphp
                {!! Form::select('show', 'Trạng thái')->options($status)->value( old('show', $result->show)) !!}
            </div>
            <div class="col">
                @php
                    $status = collect(['0' => 'Thường', '1' => 'Nổi bật'])
                @endphp
                {!! Form::select('hot', 'Loại bài')->options($status)->value( old('hot', $result->hot)) !!}
            </div>
            <div class="col">
                {!! Form::text('pos', 'Vị trí (Nhỏ đến lớn)')->value( old('pos', $result->pos))->type('number') !!}
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                {!! Form::select('sign_id', 'Chữ ký')->options($signs, 'title', 'id')->value( old('sign_id', $result->sign_id)) !!}
            </div>
        </div>
        @include('back.module.image', ['title'=>"Hình ảnh", 'name'=>"thumb", 'src'=>$result->thumb])
    </div>
@endsection
