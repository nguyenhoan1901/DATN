@extends('back.layout.master')

@php
$title = "Quản lý Users";
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
                    <a href="{{route('users.create')}}" class="fa fa-plus"> <span>Add</span></a>
                </div>
            </div>
		</div>

		<div class="table-responsive">
			<table class="table" id="datatable">
				<thead>
					<tr>
						<th>ID</th>
						<th>Username</th>
						<th>Name</th>
						<th>Email</th>
						<th>Admin</th>
						<th>Created At</th>
						<th>Updated At</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($users as $user)
					<tr>
						<td>{{$user->id}}</td>
						<td><a href="{{route('users.edit', $user->id)}}">{{$user->username}}</td>
						<td>{{$user->name}}</td>
						<td>{{$user->email}}</td>
						<td>@if($user->is_admin==1)Yes @else No @endif</td>
						<td>{{$user->created_at}}</td>
						<td>{{$user->updated_at}}</td>
                        <td>
                            <div class="list-icons">
                                <a href="{{route('users.edit', $user->id)}}" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                                <a href="{{route('users.delete', $user->id)}}" onclick="return deleteConfirm()" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
                            </div>
                        </td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
        <hr>
        {{$users->links()}}
	</div>
	<!-- /basic responsive table -->

</div>
@endsection
