<h1>Member Lists</h1>
<table style="border: 3px solid black;">
	<style type="text/css">
		tr,td{border: 1px solid black;}
	</style>
	<tr>
	<td>Id</td>
	<td>Name</td>
	<td>class</td>
	<td>subject</td>
	<td colspan="2">Action</td>
</tr>
@foreach($mem as $item)
<tr>
	<td>{{$item['id']}}</td>
	<td>{{$item['name']}}</td>
	<td>{{$item['class']}}</td>
	<td>{{$item['subject']}}</td>
	<td><a href="update/{{$item['id']}}">Update</a></td>
	<td><a href="delete/{{$item['id']}}">Delete</a></td>
</tr>
@endforeach
</table>