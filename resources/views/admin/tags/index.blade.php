@extends('admin.templates.app')

@section('judul')
<h1>Tags</h1>
@endsection

@section('content')
<a href="{{ route('tags.create') }}" class="btn btn-success"><span class="fa fa-plus-circle"></span> Add Tags</a>
@include('admin.feedback.index')
<table class="table table-hover table-bordered table-sm table-striped mt-3" id="tags">
	<thead>
		<tr>
			<th>No</th>
			<th>Tags Name</th>
			<th>Created At</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($tags as $result => $hasil)
		<tr>
			<td>{{ !empty($i) ? ++$i : $i = 1 }}</td>
			<td>{{ $hasil->name }}</td>
			<td>{{ $hasil->created_at }}</td>
			<td class="row">
				<a href="{{ route('tags.edit', $hasil->id) }}" class="btn btn-primary "><span class="fa fa-pencil"></span> Edit</a>
				<form action="{{ route('tags.destroy', $hasil->id) }}" method="POST">
					{{ csrf_field() }}
					{{ method_field('delete') }}
					<button href="" class="btn btn-danger ml-2"><span class="fa fa-trash"></span> Hapus</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

{{ $tags->links() }}


@endsection