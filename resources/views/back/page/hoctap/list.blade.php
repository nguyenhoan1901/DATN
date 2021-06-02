@extends('back.layout.master')

@php
$title = "Quản lý kết quả học tập";
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
                    <a href="{{route('hoctap.create')}}" class="fa fa-plus"> <span>Add</span></a>
                </div>
            </div>
		</div>

		<div class="table-responsive">
			<table class="table" id="datatable">
				<thead>
					<tr>
						<th>ID</th>
						<th>Tên học viên</th>
						<th>Kỳ học</th>
						<th>CPA</th>
						<th>GPA</th>
						<th>Môn nợ</th>
						<th>Trạng thái</th>
						<th>Thời gian tạo</th>
						<th>Thời gian chỉnh sửa</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>

				@foreach($hocTaps as $hocTap)
					<tr>
						<td>{{$hocTap->id}}</td>
						<td><a href="{{route('hoctap.show', $hocTap->id)}}">{{$hocTap->name}}</td>
						<td>{{$hockys[$hocTap->ky_hoc]}}</td>
						<td>{{$hocTap->cpa}}</td>
						<td>{{$hocTap->gpa}}</td>
						<td>{{$hocTap->mon_no}}</td>
						<td>{{$status[$hocTap->status]}}</td>
						<td>{{$hocTap->created_at}}</td>
						<td>{{$hocTap->updated_at}}</td>
                        <td>
                            <div class="list-icons">
                                @if($currentUser->is_admin == 1 || $hocTap->status == 0)
                                    <a href="{{route('hoctap.edit', $hocTap->id)}}" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                                    <a href="{{route('hoctap.delete', $hocTap->id)}}" onclick="return deleteConfirm()" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
                                @endif
                            </div>
                        </td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
	<!-- /basic responsive table -->

</div>
@endsection
