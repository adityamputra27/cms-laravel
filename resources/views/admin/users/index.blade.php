@extends('admin.templates.app')

@section('judul')
<h1>Users</h1>
@endsection

@section('content')
<a href="" class="btn btn-success"><span class="fa fa-plus-circle"></span> Tambah Users</a>
@include('admin.feedback.index')
<table class="table table-hover table-bordered table-sm table-striped mt-3" id="tags">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama User</th>
			<th>Email</th>
			<th>Type</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($user as $result => $hasil)
		<tr>
			<td>{{ !empty($i) ? ++$i : $i = 1 }}</td>
			<td>{{ $hasil->name }}</td>
			<td>{{ $hasil->email }}</td>
			<td>
				@if($hasil->tipe)
				<span class="badge badge-info">Administrator</span>
				@else
				<span class="badge badge-warning">Author</span>
				@endif
			</td>
			<td class="row">
				
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

{{ $user->links() }}


@endsection