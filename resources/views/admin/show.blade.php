<!DOCTYPE html>
<html>
<head>
	<title>Employee Details</title>
</head>
<body>
	<a href="{{route('admin.employeelist')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>
	<table border="1">
		<tr>
			<td>Employee Name</td>
			<td>{{$name}}</td>
		</tr>
		<tr>
			<td>Company Name</td>
			<td>{{$CompanyName}}</td>
		</tr>
		<tr>
			<td>Contact Number</td>
			<td>{{$contactno}}</td>
		</tr>
		<tr>
			<td>User Name</td>
			<td>{{$username}}</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>{{$password}}</td>
		</tr>
		<tr>
			<td>type</td>
			<td>{{$type}}</td>
		</tr>
	</table>
</body>
</html>