@extends('back.layout.master')

@php
$title = "Quản lý kết quả rèn luyện";
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
                @php if($currentUser->is_admin == 1) { @endphp
                <div class="list-icons">
                    <a href="{{route('theluc.create')}}" class="fa fa-plus"> <span>Add</span></a>
                </div>
                @php } @endphp
            </div>
		</div>

		<div class="table-responsive">
			<table class="table" id="datatable">
				<thead>
					<tr>
						<th>ID</th>
						<th>Tên học viên</th>
						<th>Kết quả</th>
						<th>Ngày cập nhật</th>
						<th>Thời gian tạo</th>
						<th>Thời gian chỉnh sửa</th>
                        @php if($currentUser->is_admin == 1) { @endphp
						<th>Action</th>
                        @php } @endphp
					</tr>
				</thead>
				<tbody>
				@foreach($theLucs as $theLuc)
					<tr>
						<td>{{$theLuc->id}}</td>
						<td><a href="{{route('theluc.show', $theLuc->id)}}">{{$theLuc->name}}</td>
						<td>{{$arrKetQua[$theLuc->ket_qua]}}</td>
						<td>{{$theLuc->ngay_cap_nhat}}</td>
						<td>{{$theLuc->created_at}}</td>
						<td>{{$theLuc->updated_at}}</td>
                        @php if($currentUser->is_admin == 1) { @endphp
                        <td>
                            <div class="list-icons">
                                <a href="{{route('theluc.edit', $theLuc->id)}}" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                                <a href="{{route('theluc.delete', $theLuc->id)}}" onclick="return deleteConfirm()" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
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
