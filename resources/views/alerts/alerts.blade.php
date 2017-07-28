@if (Session::has('message-success'))
<div class="container">
	<div class="row">
		<div class="alert alert-success alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>


			</button>
			<span class="lead">{{Session::get('message-success')}}</span>
		</div>
	</div>
</div>
@endif

@if (Session::has('message-error'))
<div class="container">
	<div class="row">
		<div class="alert alert-danger alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>


			</button>
			<span class="lead">{{Session::get('message-error')}}</span>
		</div>
	</div>
</div>
@endif