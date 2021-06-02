@extends('back.layout.master')

@php
    $title = 'Bài viết';
    $prefix = "news";
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
                        <form method="get">
                        <th><input class="form-control" name="title" value="{{ request()->title }}"></th>
                        <th>
                            <select name="categorys[]" class="form-control" multiple>
                                @foreach($categorys as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                                @endforeach
                            </select>
                        </th>
                        <th><input type="date" class="form-control" name="created_at" value="{{ request()->created_at }}"></th>
                        <th><button class="btn btn-outline-success" type="submit">Tìm</button></th>
                        </form>
                    </tr>
                    <tr>
                        <th>Tiêu đề</th>
                        <th>Chuyên mục</th>
                        <th>Thời gian tạo</th>
                        <th>Tác vụ</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($results as $r)
                        <tr>
                            <td><a href="{{route($prefix.'.edit', $r->id)}}">{{$r->title}}</a></td>
                            <td>
                                @if($r->categorys)
                                    @foreach($r->categorys as $cat)
                                        @if(!$loop->first)
                                            ,
                                        @endif
                                        <a href="">{{ $cat->category->title }}</a>
                                    @endforeach
                                @endif
                            </td>
                            <td>{{$r->created_at}}</td>
                            <td>
                                <div class="list-icons">
                                    <a href="{{route($prefix.'.edit', $r->id)}}" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                                    <a href="{{route($prefix.'.delete', $r->id)}}" onclick="return deleteConfirm()" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{ $results->links() }}
        <!-- /basic responsive table -->

    </div>
@endsection
