<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<h2>Login</h2>
	<form action="{{route('loginuser')}}" method="post">
		@csrf
		<div class="form-group">
			<input type="email" name="email" placeholder="email" value="{{old('name')}}" class="form-control">
			<span class="text-danger">@error('email'){{$message}} @enderror</span>
		</div>
		<div class="form-group">
			<input type="password" name="password" value="{{old('password')}}" class="form-control">
			<span class="text-danger">@error('password'){{$message}} @enderror</span>
		</div>
		<input type="submit" value="login">
		<br>
		<a href="registration">Registration</a>
	</form>
</div>
</body>
</html>