@extends('admin.templates.app')

@section('judul')
<h1>Posts</h1>
@endsection

@section('content')
<a href="{{ route('posts.create') }}" class="btn btn-success"><span class="fa fa-plus-circle"></span> Add Posts</a>
@include('admin.feedback.index')
<table class="table table-hover table-bordered table-sm table-striped mt-3" id="posts">
	<thead>
		<tr>
			<th>No</th>
			<th>Title</th>
			<th>Category</th>
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
			<td>{{ substr($hasil->content, 0, 30) }}</td>
			<td>
				@foreach($hasil->tags as $tag)
				<ul style="list-style: none;">
				    <h6><span class="badge badge-info">{{ $tag->name }}</span></h6>
				</ul>
				@endforeach
			</td>
			<td><img src="{{ asset('uploads/posts/'.$hasil->gambar) }}" width="120" alt=""></td>
			<td>{{ $hasil->users->name }}</td>
			<td class="row">
				<a href="{{ route('posts.edit', $hasil->id) }}" class="btn btn-primary "><span class="fa fa-pencil"></span> Edit</a>
				<form action="{{ route('posts.destroy', $hasil->id) }}" method="POST">
					{{ csrf_field() }}
					{{ method_field('delete') }}
					<button href="" class="btn btn-danger ml-2"><span class="fa fa-trash"></span> Hapus</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

{{ $posts->links() }}


@endsection