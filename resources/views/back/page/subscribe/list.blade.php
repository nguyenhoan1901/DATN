@extends('back.layout.master')

@php
$title = "Đăng ký nhận tin";
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
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Email</th>
						<th>Thời gian</th>
					</tr>
				</thead>
				<tbody>
				@foreach($results as $r)
					<tr>
						<td>{{$r->id}}</td>
						<td>{{$r->email}}</td>
						<td>{{date('d-m-Y H:i:s', strtotime($r->created_at))}}</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
	<!-- /basic responsive table -->

</div>
@endsection