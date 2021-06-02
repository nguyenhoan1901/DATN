@extends('back.layout.master')

@php
    $title = 'Danh sách trang';
    $route = "page";
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
                        <a href="{{route($route.'.create')}}" class="fa fa-plus"></a>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 100px">Vị trí</th>
                        <th>Trang</th>
                        <th>Mô tả</th>
                        <th>Thuộc mục</th>
                        <th>Trạng thái</th>
                        <th>Thời gian tạo</th>
                        <th>Tác vụ</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($results as $r)
                        <tr>
                            <td><input style="width: 100px" data-id="{{$r->id}}" name="pos" class="form-control" value="{{ $r->pos }}"></td>
                            <td><a href="{{route($route.'.edit', $r->id)}}">{{$r->title}}</a></td>
                            <td>{{$r->desc}}</td>
                            <td>{{$r->parent_id == 0 ? 'Gốc' : ''}}</td>
                            <td>{{$r->show ? "Hiện":"Ẩn"}}</td>
                            <td>{{$r->created_at}}</td>
                            <td>
                                <div class="list-icons">
                                    <a href="{{route($route.'.edit', $r->id)}}" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                                    <a href="{{route($route.'.delete', $r->id)}}" onclick="return deleteConfirm()" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                            @foreach($r->childs as $r1)
                                <tr>
                                    <td><input style="width: 100px" data-id="{{$r1->id}}" name="pos" class="form-control" value="{{ $r1->pos }}"></td>
                                    <td><a href="{{route($route.'.edit', $r1->id)}}"> -- {{$r1->title}}</a></td>
                                    <td>{{$r1->desc}}</td>
                                    <td>{{$r->title}}</td>
                                    <td>{{$r1->show ? "Hiện":"Ẩn"}}</td>
                                    <td>{{$r1->created_at}}</td>
                                    <td>
                                        <div class="list-icons">
                                            <a href="{{route($route.'.edit', $r1->id)}}" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                                            <a href="{{route($route.'.delete', $r1->id)}}" onclick="return deleteConfirm()" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @if($r->childs->count())

                                @endif
                            @endforeach
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /basic responsive table -->

    </div>
@endsection
