@section('js')

@stop
@extends('admin.templates.app')

@section('judul')
<h1><span class="fa fa-trash"></span> Posts Yang Sudah Dihapus</h1>
@endsection

@section('content')
@include('admin.feedback.index')
<table class="table table-hover table-bordered table-sm table-striped mt-3" id="posts">
	<thead>
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Kategori</th>
			<th>Content</th>
			<th>Tags</th>
			<th>Thumbnail</th>
			<th>Admin</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($posts as $result => $hasil)
		<tr>
			<td>{{ !empty($i) ? ++$i : $i = 1 }}</td>
			<td>{{ $hasil->judul }}</td>
			<td>{{ $hasil->category->name }}</td>
			<td>{{ $hasil->content }}</td>
			<td>
				@foreach($hasil->tags as $tag)
				<ul style="list-style: none;">
				    <h6><span class="badge badge-info">{{ $tag->name }}</span></h6>
				</ul>
				@endforeach
			</td>
			<td><img src="{{ asset('uploads/posts/'.$hasil->gambar) }}" width="120" alt=""></td>
			<td>&nbsp;</td>
			<td class="row">
				<a href="{{ route('posts.restore', $hasil->id ) }}" class="btn btn-info "><span class="fa fa-sign-in"></span> Restore</a>
				<form action="{{ route('posts.kill', $hasil->id ) }}" method="POST">
					{{ csrf_field() }}
					{{ method_field('delete') }}
					<button	class="btn btn-danger ml-2"><span class="fa fa-trash"></span> Delete</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

{{ $posts->links() }}


@endsection