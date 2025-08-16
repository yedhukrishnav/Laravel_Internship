<h1>Update Data</h1>
<form action="/update" method="POST">
	@csrf

	<input type="hidden" name="id" value="{{$data['id']}}"><br>
	<input type="text" name="name" value="{{$data['name']}}"><br>
	<input type="text" name="class" value="{{$data['class']}}"><br>
	<input type="text" name="subject" value="{{$data['subject']}}"><br>
	<button type="submit">Update</button>
	
</form>