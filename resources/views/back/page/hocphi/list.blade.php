@extends('back.layout.master')

@php
$title = "Quản lý học phí";
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
                    <a href="{{route('hocphi.create')}}" class="fa fa-plus"> <span>Add</span></a>
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
						<th>Học phí</th>
						<th>Trạng thái</th>
						<th>Thời gian tạo</th>
						<th>Thời gian chỉnh sửa</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($hocPhis as $hocPhi)
					<tr>
						<td>{{$hocPhi->id}}</td>
						<td><a href="{{route('hocphi.show', $hocPhi->id)}}">{{$hocPhi->name}}</td>
						<td>{{$hockys[$hocPhi->hoc_ky]}}</td>
						<td>{{$hocPhi->hoc_phi}}</td>
						<td>{{$status[$hocPhi->status]}}</td>
						<td>{{$hocPhi->created_at}}</td>
						<td>{{$hocPhi->updated_at}}</td>
                        <td>
                            <div class="list-icons">
                                @if($currentUser->is_admin == 1 || $hocPhi->status == 0)
                                    <a href="{{route('hocphi.edit', $hocPhi->id)}}" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                                    <a href="{{route('hocphi.delete', $hocPhi->id)}}" onclick="return deleteConfirm()" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
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
