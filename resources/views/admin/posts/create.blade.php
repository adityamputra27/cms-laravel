@section('js')
<script type="text/javascript">
function readURL() {
    var input = this;
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(input).prev().attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$(function () {
    $(".uploads").change(readURL)
    $("#f").submit(function(){
        return false
    })
})
</script>
<script>
	$(document).ready(function ()
	{
		$('.select2').select2();
	});
</script>
<script>
	CKEDITOR.replace( 'content' );
</script>
@stop
@extends('admin.templates.app')

@section('judul')
<h1>Add Posts</h1>
@endsection

@section('content')
<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}
    @include('admin.feedback.index')
	<div class="form-group">
		<h6>Title</h6>
		<input type="text" class="form-control" name="judul">
	</div>
	<div class="form-group">
		<h6>Category</h6>
		<select class="form-control" name="category_id">
			<option>Select Category</option>
			@foreach($category as $result)
			<option value="{{ $result->id }}">{{ $result->name }}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<h6>Tags</h6>
		<select class="form-control select2" multiple name="tags[]">
			@foreach($tags as $tag)
			<option value="{{ $tag->id }}"
				>{{ @$tag->name }}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group"> 
		<h6>Content</h6>
		<textarea class="form-control" id="content" name="content"></textarea> 
	</div>
	<div class="form-group">
		<h6>Choose Picture (Preview)</h6>
		<img width="150"/>
		<input type="file" class="uploads form-control" name="gambar" style="margin-top: 16px;">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary btn-block"><span class="fa fa-check-circle"></span> Save</button>
	</div>
</form>
@endsection