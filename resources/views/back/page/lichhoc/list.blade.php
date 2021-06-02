@extends('back.layout.master')

@php
$title = "Quản lý lịch học";
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
                    <a href="{{route('lichhoc.create')}}" class="fa fa-plus"> <span>Add</span></a>
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
						<th>Ngày bắt đầu</th>
						<th>Ngày kết thúc</th>
						<th>Chi tiết</th>
						<th>Trạng thái</th>
						<th>Thời gian tạo</th>
						<th>Thời gian chỉnh sửa</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($lichHocs as $lichHoc)
					<tr>
						<td>{{$lichHoc->id}}</td>
						<td><a href="{{route('lichhoc.show', $lichHoc->id)}}">{{$lichHoc->name}}</td>
						<td>{{$hockys[$lichHoc->hoc_ky]}}</td>
						<td>{{$lichHoc->ngay_bat_dau}}</td>
						<td>{{$lichHoc->ngay_ket_thuc}}</td>
						<td>{{$lichHoc->chi_tiet}}</td>
						<td>{{$status[$lichHoc->status]}}</td>
						<td>{{$lichHoc->created_at}}</td>
						<td>{{$lichHoc->updated_at}}</td>
                        <td>
                            <div class="list-icons">
                                @if($currentUser->is_admin == 1 || $lichHoc->status == 0)
                                    <a href="{{route('lichhoc.edit', $lichHoc->id)}}" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                                    <a href="{{route('lichhoc.delete', $lichHoc->id)}}" onclick="return deleteConfirm()" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
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
