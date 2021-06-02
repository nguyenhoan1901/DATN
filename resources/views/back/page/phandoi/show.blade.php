@extends('back.layout.master')

@php
    $title = "Thông tin phân đội";
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
            <h5 class="card-title">Chi tiết phân đội</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a href="{{route('phandoi.edit', $result['id'])}}" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                    <a href="{{route('phandoi.delete', $result['id'])}}" onclick="return deleteConfirm()" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
                </div>
            </div>
        </div>
        <div class="card-body">
                <fieldset class="mb-3">
                    <legend class="text-uppercase font-size-sm font-weight-bold">Thông tin</legend>
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::text('ten_phan_doi', 'Tên phân đội')->value($result['ten_phan_doi'])->readonly() !!}
                            {!! Form::text('truong_dai_hoc', 'Trường đại học')->value($result['truong_dai_hoc'])->readonly() !!}
                            {!! Form::text('phan_doi_truong', 'Phân đội trưởng')->value($result['name'])->readonly() !!}
                        </div>
                    </div>
                </fieldset>
        </div>
    </div>
    </form>
</div>

@endsection
