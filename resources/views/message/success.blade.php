@if (session()->has('message'))
	<div class="alert alert-success alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<i class="fa fa-check pr10"></i>
		<strong>Well done!</strong> {{ session('message') }}
	</div>
@endif