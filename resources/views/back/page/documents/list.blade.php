@extends('back.layout.master')

@php
$title = "Quản lý văn bản";
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
                    <a href="{{route('documents.create')}}" class="fa fa-plus"> <span>Add</span></a>
                </div>
            </div>
		</div>

		<div class="table-responsive">
			<table class="table" id="datatable">
				<thead>
					<tr>
						<th>ID</th>
						<th>Tiêu đề</th>
						<th>Nội dung</th>
						<th>Thời gian tạo</th>
						<th>Thời gian chỉnh sửa</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($documents as $document)
					<tr>
						<td>{{$document->id}}</td>
                        <td><a href="{{route('documents.show', $document->id)}}">{{$document->title}}</td>
						<td>{{strlen(html_entity_decode($document->content)) > 40 ? mb_substr(html_entity_decode($document->content), 0 , 40).'...' : html_entity_decode($document->content)}}</td>
						<td>{{$document->created_at}}</td>
						<td>{{$document->updated_at}}</td>
                        <td>
                            <div class="list-icons">
                                <a href="{{route('documents.edit', $document->id)}}" class="list-icons-item text-primary-600"><i class="icon-pencil7"></i></a>
                                <a href="{{route('documents.delete', $document->id)}}" onclick="return deleteConfirm()" class="list-icons-item text-danger-600"><i class="icon-trash"></i></a>
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
