@extends('back.layout.master')

@php
    $title = "Nội dung website";
    $isEdit = false;
@endphp

@section('web_title')
    {{$title}}
@endsection

@section('content')
    <div class="content">

        <!-- Form inputs -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">{{ $title }}</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a href="{{ url()->current() }}?cache=1" class="btn btn-success text-white">ÁP DỤNG</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="get" id="new_key">
                    @csrf
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Thêm mới</label>
                        <div class="col-lg-10">
                            <div class="input-group">
                                <input type="text" name="new_key" class="form-control border-right-0" placeholder="Nhập nội dung">
                                <span class="input-group-append">
                                    <button name="save_key" class="btn bg-teal" type="submit">Lưu</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <table class="table datatable-basic">
                <thead>
                <tr>
                    <th>Từ khóa</th>
{{--                    <th>Mô tả</th>--}}
                    @foreach($global_langs as $lang)
                        <th>{{ $lang->title }}</th>
                    @endforeach
                </tr>
                </thead>
                <tbody>
                @foreach($trans as $tran)
                    <tr>
                        <form method="post" class="form">
                            @csrf
                            <input type="hidden" name="id" value="{{$tran->id}}">
                            <td>{!! $tran->key !!}</td>
                            @foreach($global_langs as $lang)
                                <td>
                                    <span class="d-none">{{ $tran->getTranslation('detail', $lang->code) }}</span>
                                    <input class="form-control" name="detail[{{$lang->code}}]" value="{{ $tran->getTranslation('detail', $lang->code) }}">
                                </td>
                            @endforeach
                        </form>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('js')
    <script>
        $('.datatable-basic').DataTable();
    </script>

    <script>
        $('.form').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: '{{ route('translate.update') }}',
                data: $(this).serialize(),
                success: function(msg) {
                    $.jGrowl(msg, {
                        header: 'Thành công!',
                        theme: 'bg-success'
                    });
                }
            });
        });
    </script>
@endsection
