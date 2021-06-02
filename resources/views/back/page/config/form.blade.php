@extends('back.layout.form_layout')

@php
    $isEdit = true;
    $title = "Cài đặt chung"
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
                    @foreach($configs->whereIn('type', ['input', 'textarea']) as $config)
                        @switch($config->type)
                            @case("textarea")
                            {!! Form::textarea('detail['.$config->key.']['.$lang->code.']', $config->desc)->value( old('detail.'.$config->key.'.'.$lang->code, $config->getTranslation('detail', $lang->code)) ) !!}
                            @break
                            @default
                            {!! Form::text('detail['.$config->key.']['.$lang->code.']', $config->desc)->value( old('detail.'.$config->key.'.'.$lang->code, $config->getTranslation('detail', $lang->code)) ) !!}
                        @endswitch
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
    <div class="col-md-5">
        <div class="row">
            <div class="col">
                @foreach($configs->where('type', 'select') as $config)
                    {!! Form::select("detail[".$config->key."]", $config->desc)->options($config->options, 'title', 'id')->value( old('detail', $config->detail)) !!}
                @endforeach
                @foreach($configs->where('type', 'image') as $config)
                    @include('back.module.image', ['title'=>$config->desc, 'name'=>"detail[".$config->key."]", 'src'=>$config->detail])
                @endforeach
            </div>
        </div>
    </div>
@endsection
