@if (count ($errors) > 0)
<div class="alert alert-danger fade in" role="alert">
  <button type="button" class="close pull-right" data-dismiss="alert" aria-label="Tutup">
    <span aria-hidden="true">&times;</span>
  </button>
  <p>Attention.</p>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }} <span class="fa fa-close"></span></li>
    @endforeach
  </ul>
</div>
@endif

@if (session('success'))
@section('js')
<script>
	$.notifyDefaults({
		placement: {
			from: "bottom",

		},
		animate:{
		enter: "animated fadeInUp",
		exit: "animated fadeOutDown"
	}
	});
	$.notify('<i class="fa fa-check-circle"></i> {!! session("success") !!}', {
		type: "success"
	});
</script>
@stop
@endif

@if (session('error'))
@section('js')
<script>
	$.notifyDefaults({
		placement: {
			from: "bottom",

		},
		animate:{
		enter: "animated fadeInUp",
		exit: "animated fadeOutDown"
	}
	});
	$.notify('<i class="fa fa-close"></i> {!! session("error") !!}', {
		type: "danger"
	});
</script>
@stop
@endif

