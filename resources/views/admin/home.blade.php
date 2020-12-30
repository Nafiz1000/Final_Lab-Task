<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
</head>
<body>
	<h1>Admin Home</h1>
	<a href="{{route('admin.home')}}"> Home</a> | 
	<a href="{{route('admin.createemployee')}}"> Register New | 
	<a href="{{route('admin.employeelist')}}"> View All Employee | 
	<a href="{{route('admin.users')}}">Search User</a> |
	<a href="/logout"> logout
</body>
</html>
