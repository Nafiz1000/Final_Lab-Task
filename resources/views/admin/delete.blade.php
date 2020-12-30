<!DOCTYPE html>
<html>
<head>
	<title>Employee Details</title>
</head>
<body>
	<a href="{{route('admin.employeelist')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>
	<br>
	<form method="post">
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
			<tr>
				<td colspan="2">
					<h3>Confirm Delete</h3><br>
					<input type="submit" name="submit" value="Yes">
					<button>
						<a href="{{route('admin.employeelist')}}">No</a>
					</button>
					<input type="hidden" name="_token" value="{{csrf_token()}}">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>