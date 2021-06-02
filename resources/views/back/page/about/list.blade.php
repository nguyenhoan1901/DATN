@extends('back.layout.master')

@php
$title = "Giới thiệu";
$prefix = "about";
@endphp


@section('web_title')
    {{$title}}
@endsection

@section('head')
	<!-- Theme JS files -->
	<script src="global_assets/js/plugins/tables/footable/footable.min.js"></script>
@endsection

@section('content')
<div class="content">

	<!-- Basic responsive table -->
	<div class="card">
		<div class="card-header header-elements-inline">
			<h5 class="card-title">{{$title}}</h5>
			<div class="header-elements">
				<div class="list-icons">
					<a href="{{route($prefix.'.create')}}" class="fa fa-plus"></a>
				</div>
			</div>
		</div>

		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Tiêu đề</th>
						<th>Mô tả</th>
						<th>Thời gian</th>
						<th>Tác vụ</th>
					</tr>
				</thead>
				<tbody>
				@foreach($results as $r)
					<tr>
						<td>{{$r->id}}</td>
						<td><a href="{{route($prefix.'.edit', $r->id)}}">{{$r->title}}</a></td>
						<td>{{$r->desc}}</td>
						<td>{{date('d-m-Y', strtotime($r->created_at))}}</td>
						<td>
							<div class="list-icons">
								<a href="{{route($prefix.'.edit', $r->id)}}" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
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
