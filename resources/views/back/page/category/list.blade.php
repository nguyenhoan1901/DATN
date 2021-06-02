@extends('back.layout.master')

@php
    $title = "Chuyên mục";
    $prefix = "category";
@endphp

@section('web_title')
    {{$title}}
@endsection

@section('content')
    <div class="content">

        <!-- Basic responsive table -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">{{$title}}</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a href="{{route($prefix.'.create')}}" class="fa fa-plus"></a>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Chuyên mục</th>
                        <th>Thuộc mục</th>
                        <th>Thời gian tạo</th>
                        <th>Tác vụ</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($results as $r)
                        <tr>
                            <td>{{$r->id}}</td>
                            <td><a href="{{route($prefix.'.edit', $r->id)}}"><strong>{{$r->title}}</strong></a></td>
                            <td><strong>Gốc</strong></td>
                            <td>{{$r->created_at}}</td>
                            <td>
                                <div class="list-icons">
                                    <a href="{{route($prefix.'.edit', $r->id)}}" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                                    <a href="{{route($prefix.'.delete', $r->id)}}" onclick="return deleteConfirm()" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        @if(count($r->childs))
                            @foreach($r->childs  as $child)
                                <tr>
                                    <td>{{$child->id}}</td>
                                    <td><a href="{{route($prefix.'.edit', $child->id)}}">-- {{$child->title}}</a></td>
                                    <td>-- {{$child->parent->title}}</td>
                                    <td>{{$child->created_at}}</td>
                                    <td>
                                        <div class="list-icons">
                                            <a href="{{route($prefix.'.edit', $child->id)}}" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                                            <a href="{{route($prefix.'.delete', $child->id)}}" onclick="return deleteConfirm()" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /basic responsive table -->

    </div>
@endsection
