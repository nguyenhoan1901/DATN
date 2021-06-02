@extends('back.layout.master')

@php
$title = 'Feedback';
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
					<a href="{{route('feedback.create')}}" class="fa fa-plus"></a>
				</div>
			</div>
		</div>
		{{--
		<div class="card-body">
			Example of a basic <code>responsive</code> table. Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive</code> to make them scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, you will not see any difference in these tables.
		</div>
		--}}

		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Khách hàng</th>
						<th>Nội dung</th>
						<th>Thời gian</th>
						<th>Tác vụ</th>
					</tr>
				</thead>
				<tbody>
				@foreach($results as $r)
					<tr>
						<td>{{$r->id}}</td>
						<td><a href="{{route('feedback.edit', $r->id)}}">{{$r->name}}</a></td>
						<td>{{$r->detail}}</td>
						<td>{{$r->created_at}}</td>
						<td>
							<div class="list-icons">
								<a href="{{route('feedback.edit', $r->id)}}" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
								<a href="{{route('feedback.delete', $r->id)}}" onclick="return deleteConfirm()" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
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
