@extends('back.layout.master')

@php
$title = "Quản lý thông tin sinh viên";
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
                    <a href="{{route('account.create')}}" class="fa fa-plus"> <span>Add</span></a>
                </div>
            </div>
		</div>

		<div class="table-responsive">
			<table class="table" id="datatable">
				<thead>
					<tr>
						<th>ID</th>
						<th>Tên học viên</th>
						<th>Dân tộc</th>
						<th>Địa chỉ</th>
						<th>Số CMTND</th>
						<th>Nơi cấp</th>
                        <th>Hộ khẩu</th>
                        <th>Trạng thái</th>
                        <th>Thời gian tạo</th>
                        <th>Thời gian chỉnh sửa</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>

				@foreach($accounts as $account)
					<tr>
						<td>{{$account->id}}</td>
						<td><a href="{{route('account.show', $account->id)}}">{{$account->name}}</td>
						<td>{{$account->dan_toc}}</td>
						<td>{{$account->dia_chi}}</td>
						<td>{{$account->cmtnd}}</td>
						<td>{{$account->noi_cap}}</td>
						<td>{{$account->ho_khau}}</td>
                        <td>{{$status[$account->status]}}</td>
						<td>{{$account->created_at}}</td>
						<td>{{$account->updated_at}}</td>

                        <td>
                            <div class="list-icons">
                                @if($currentUser->is_admin == 1 || $account->status == 0)
                                    <a href="{{route('account.edit', $account->id)}}" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                                    <a href="{{route('account.delete', $account->id)}}" onclick="return deleteConfirm()" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
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
