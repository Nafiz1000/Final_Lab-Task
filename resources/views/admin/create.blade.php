<!DOCTYPE html>
<html>
<head>
	<title>Registetion Form</title>
</head>
<body>
	<form method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<fieldset>
			<legend>Registetion Form</legend>
		<table>
			<tr>
				<td>Employee Name</td>
				<td><input type="text" name="name" value="{{old('name')}}"></td>
			</tr>
			<tr>
				<td>Company Name</td>
				<td><input type="text" name="CompanyName" value="{{old('CompanyName')}}"></td>
			</tr>
			<tr>
				<td>Contact No</td>
				<td><input type="text" name="contactno" value="{{old('contactno')}}"></td>
			</tr>
			<tr>
				<td>User Name</td>
				<td><input type="text" name="username" value="{{old('username')}}"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="{{old('password')}}"></td>
			</tr>
			<tr>
				<td>type</td>
				<td><input type="text" name="type" value="{{old('type')}}"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Submit">
					 
					<button>
						<a href="{{route('admin.home')}}">
							Back
						</a>
					</button>
					 
				</td>
			</tr>
		</table>
		</fieldset>
	</form>
	<div>
		@foreach($errors->all() as $err)
			{{$err}} <br>
		@endforeach
	</div>
</body>
</html>