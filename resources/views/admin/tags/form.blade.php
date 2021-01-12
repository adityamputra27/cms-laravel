@extends('admin.templates.app')

@section('judul')
<h1>Add Tags</h1>
@endsection

@section('content')
<form action="{{ empty($result) ? route('tags.store') : route('tags.update', $result->id) }}" method="POST">
	{{ csrf_field() }}

	@if (!empty($result))
    {{ method_field('patch') }}
    @endif

    @include('admin.feedback.index')
	<div class="form-group">
		<h6>Tags Name</h6>
		<input type="text" class="form-control" name="name" value="{{ @$result->name }}">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary btn-block"><span class="fa fa-check-circle"></span> {{ empty($result) ? 'Save' : 'Update' }}</button>
	</div>
</form>
@endsection