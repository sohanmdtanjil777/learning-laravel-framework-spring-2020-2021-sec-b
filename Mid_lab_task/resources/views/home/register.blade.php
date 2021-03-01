<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
</head>
<body>
<form method="post">
    	@csrf
		<fieldset>
			<legend>Add</legend>
			<table>
				
				<tr>
					<td>Full Name</td>
					<td><input type="text" name="fname" value="{{old('fname')}}"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="{{old('username')}}"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="{{old('email')}}"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="{{old('password')}}"></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="cpassword" value="{{old('cpassword')}}"></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><input type="text" name="address" value="{{old('address')}}"></td>
				</tr>
				<tr>
					<td>Company Name</td>
					<td><input type="text" name="company" value="{{old('company')}}"></td>
				</tr>
				<tr>
					<td>Phone no</td>
					<td><input type="text" name="phone" value="{{old('phone')}}"></td>
				</tr>
				<tr>
					<td>City</td>
					<td><input type="text" name="city" value="{{old('city')}}"></td>
				</tr>

				<tr>
					<td>Country</td>
					<td><input type="text" name="country" value="{{old('country')}}"></td>
				</tr>

                <tr>
					<td>Type</td>
					<td>
						<select name='type'>
							<option value="admin"> ADMIN </option>
							<option value="customer"> USER </option>
							<option value="accountent">Accountent </option>
							<option value="snmp">Saler And Marketing </option>
						</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Save"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>