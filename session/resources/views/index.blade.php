<h1>User Login</h1>
<form action="/user" method="POST">
	@csrf
	<input type="text" name="user" placeholder="username"><br>
	<span style="color:red">@error('user'){{$message}}@enderror</span><br>

	<input type="password" name="password" placeholder="password"><br>
	<span style="color:red">@error('password'){{$message}}@enderror</span><br>
	
	<button type="submit">Login</button>
	

</form>