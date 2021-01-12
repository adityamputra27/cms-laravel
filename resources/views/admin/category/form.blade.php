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
        // do ajax submit or just classic form submit
      //  alert("fake subminting")
        return false
    })
})
</script>
@stop
@extends('admin.templates.app')

@section('judul')
<h1>Add Categories</h1>
@endsection

@section('content')
<form action="{{ empty($result) ? route('category.store') : route('category.update', $result->id) }}" method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}

	@if (!empty($result))
    {{ method_field('patch') }}
    @endif

    @include('admin.feedback.index')
	<div class="form-group">
		<h6>Category Name</h6>
		<input type="text" class="form-control" name="name" value="{{ @$result->name }}">
	</div>
	<div class="form-group">
		<h6>Choose Picture (Preview)</h6>
		<img width="150"/>
		<input type="file" class="uploads form-control" name="gambar" value="{{ @$result->gambar }}" style="margin-top: 20px;">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary btn-block"><span class="fa fa-check-circle"></span> {{ empty($result) ? 'Save' : 'Update' }}</button>
	</div>
</form>
@endsection