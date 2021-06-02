@extends('back.layout.master')

@php
$title = "Liên hệ";
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
		</div>

		<div class="table-responsive">
			<table class="table" id="datatable">
				<thead>
					<tr>
						<th>ID</th>
						<th>Họ tên</th>
						<th>Điện thoại</th>
						<th>Email</th>
						<th>Nội dung</th>
						<th>Thời gian</th>
					</tr>
				</thead>
				<tbody>
				@foreach($results as $r)
					<tr>
						<td>{{$r->id}}</td>
						<td>{{$r->name}}</td>
						<td>{{$r->phone}}</td>
						<td>{{$r->email}}</td>
						<td>{{ $r->message }}</td>
						<td>{{$r->created_at}}</td>
					</tr>
				@endforeach
				</tbody>
			</table>
			{{$results->links()}}
		</div>
	</div>
	<!-- /basic responsive table -->

</div>
@endsection
