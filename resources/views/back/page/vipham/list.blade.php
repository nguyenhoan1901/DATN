@extends('back.layout.master')

@php
$title = "Quản lý vi phạm";
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
                    @php if($currentUser->is_admin == 1) { @endphp
                    <a href="{{route('vipham.create')}}" class="fa fa-plus"> <span>Add</span></a>
                    @php } @endphp
                </div>
            </div>
		</div>

		<div class="table-responsive">
			<table class="table" id="datatable">
				<thead>
					<tr>
						<th>ID</th>
						<th>Tên học viên</th>
						<th>Nội dung</th>
						<th>Ngày vi phạm</th>
						<th>Mức độ</th>
						<th>Created At</th>
						<th>Updated At</th>
                        @php if($currentUser->is_admin == 1) { @endphp
						<th>Action</th>
                        @php } @endphp
					</tr>
				</thead>
				<tbody>
				@foreach($viPhams as $viPham)
					<tr>
						<td>{{$viPham->id}}</td>
						<td><a href="{{route('vipham.show', $viPham->id)}}">{{$viPham->name}}</td>
						<td>{{$viPham->noi_dung}}</td>
						<td>{{$viPham->ngay_vi_pham}}</td>
						<td>{{$arrMucDo[$viPham->muc_do]}}</td>
						<td>{{$viPham->created_at}}</td>
						<td>{{$viPham->updated_at}}</td>
                        @php if($currentUser->is_admin == 1) { @endphp
                        <td>
                            <div class="list-icons">
                                <a href="{{route('vipham.edit', $viPham->id)}}" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                                <a href="{{route('vipham.delete', $viPham->id)}}" onclick="return deleteConfirm()" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
                            </div>
                        </td>
                        @php } @endphp
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
	<!-- /basic responsive table -->

</div>
@endsection
