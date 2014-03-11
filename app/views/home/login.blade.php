<!DOCTYPE html>
<html>
<head>
	<title>Login - The Cutest Two</title>
	
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
					{{ Form::open(['route'=>'users.login', 'class'=>'form-signin'])}}
					<div class="row top20">
						<div class="col-md-4 col-md-offset-4">
							<img class="img-responsive" src="/img/key.svg">
							<h1 class="text-center">Login</h1>
						</div>
					</div>
					<div class="row top20">
						<div class="col-md-10 col-md-offset-1">
							<a href="{{ URL::route('facebookLogin') }}" data-loading-text="Logging in..." class="btn btn-primary btn-lg btn-block fb-btn"><i class="icon-facebook"></i> Login with Facebook</a>
						</div>
					</div>
					<div class="row top20">
						<div class="col-md-10 col-md-offset-1">
							{{ Form::email('email', Input::old('email'), ['class'=>'form-control input-lg', 'placeholder'=>'Email address', 'autofocus'=>true]) }}							
						</div>
					</div><!-- /row -->
					<div class="row top10">
						<div class="col-md-10 col-md-offset-1">
							{{ Form::password('password', ['class'=>'form-control input-lg', 'placeholder'=>'Password']) }}
						</div>						
					</div>
					<div class="row top10">
						<div class="col-md-5 col-md-offset-1">
							<a href="{{ URL::route('users.create') }}">Forgot password?</a>
							<br>
							<a href="{{ URL::route('users.create') }}">Don't have an account yet?</a>
						</div>
						<div class="col-md-5">
							{{ Form::submit('Login', ['class'=>'btn btn-lg btn-info btn-block']) }}
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