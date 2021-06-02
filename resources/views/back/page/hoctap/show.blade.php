@extends('back.layout.master')

@php
    $title = "Thông tin kết quả học tập";
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
            <h5 class="card-title">Chi tiết kết quả học tập</h5>
            <div class="header-elements">
                <div class="list-icons">
                    @if(!$result['status'] || $result['status'] == 0 || $currentUser->is_admin == 1)
                        <a href="{{route('hoctap.edit', $result['id'])}}" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                        <a href="{{route('hoctap.delete', $result['id'])}}" onclick="return deleteConfirm()" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
                    @endif

                </div>
            </div>
        </div>
        <div class="card-body">
                <fieldset class="mb-3">
                    <legend class="text-uppercase font-size-sm font-weight-bold">Thông tin</legend>
                    <div class="row">
                        <div class="col-md-12">
                            {!! Form::text('user_id', 'Học viên')->value($result['name'])->readonly() !!}
                            {!! Form::text('cpa', 'CPA')->value($result['cpa'])->readonly() !!}
                            {!! Form::text('gpa', 'GPA')->value($result['gpa'])->readonly() !!}
                            {!! Form::text('mon_no', 'Môn nợ')->value($result['mon_no'])->readonly() !!}
                            {!! Form::text('thoi_gian_hoc', 'Thời gian học (năm)')->value($result['thoi_gian_hoc'])->readonly() !!}
                            {!! Form::text('so_tc_tich_luy', 'Số tín chỉ tích lũy')->value($result['so_tc_tich_luy'])->readonly() !!}
                            {!! Form::text('muc_canh_cao', 'Mức cảnh cáo')->value($result['muc_canh_cao'])->readonly() !!}
                            {!!Form::select('ky_hoc', 'Kỳ học')->options($hockys)->disabled() !!}
                        </div>
                    </div>
                </fieldset>
        </div>
    </div>
    </form>
</div>

@endsection
