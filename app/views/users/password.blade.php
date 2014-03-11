<!DOCTYPE html>
<html>
<head>
	<title>{{{ $title }}}</title>
	
	<!-- le stylesheets -->
	
	<!-- fonts -->
	<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- custom stylesheets -->
	<link rel="stylesheet" href="/css/custom.css">
	<link rel="stylesheet" href="/css/login.css">
	<style>
	.btn {
		font-family: 'Rokkitt', serif;
	}
	</style>
	<!-- /le stylesheets -->

</head>
<body>
<!-- login modal -->
	<div id="login-modal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">			
				<div class="modal-body">
					{{ Form::open(['route'=>'passwordStore', 'class'=>'form-signin'])}}
					<div class="row top20">
						<div class="col-md-4 col-md-offset-4">
							<img class="img-responsive img-circle" src="{{{$user->photo}}}">
							<h1 class="text-center">Choose a Password</h1>
						</div>
					</div>
					<div class="row top10">
						<div class="col-md-10 col-md-offset-1">
							{{ Form::password('password', ['class'=>'form-control input-lg', 'placeholder'=>'Password']) }}
						</div>						
					</div><!-- /row -->
					<div class="row top10">
						<div class="col-md-10 col-md-offset-1">
							{{ Form::password('password_confirmation', ['class'=>'form-control input-lg', 'placeholder'=>'Password Confirmation']) }}
						</div>						
					</div>
					<div class="row top10">
						<div class="col-md-5 col-md-offset-1">
							<a class="btn btn-lg btn-default btn-block"href="/logout">Logout</a>
						</div>
						<div class="col-md-5">
							{{ Form::submit('Save', ['class'=>'btn btn-lg btn-info btn-block']) }}
						</div>						
					</div>
					{{ Form::close() }}
					<div class="clearfix"></div>
				</div>
				<div class="modal-footer">
					<a class="pull-left" href="{{ URL::route('users.create') }}">What's this?</a>
					<a id="modal-dismiss" class="pull-right text-muted" href="#" data-dismiss="modal" data-target="#modal-login">No, thanks.</a>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
<!-- /login modal -->
<!-- /le scripts -->

<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-latest.min.js"></script>


<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<script>
$('#login-modal').modal();
</script>
<!-- /le scripts -->
</body>
</html>