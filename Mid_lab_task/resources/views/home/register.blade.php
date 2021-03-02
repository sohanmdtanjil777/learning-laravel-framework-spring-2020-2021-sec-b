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
					<td><input type="text" name="fname" value="{{old('fname')}}">

                   <span>{{ $errors->first('fname') }}</span>
					</td>
				</tr>
				<tr>
					<td><br>Username</td>
					<td><br><input type="text" name="username" value="{{old('username')}}">
                      
                    <span>{{ $errors->first('username') }}</span>

					</td>
				</tr>
				<tr>
					<td><br>Email</td>
					<td><br><input type="email" name="email" value="{{old('email')}}">

                    <span>{{ $errors->first('email') }}</span>

					</td>
				</tr>
				<tr>
					<td><br>Password</td>
					<td><br><input type="password" name="password" value="{{old('password')}}">

                    <span>{{ $errors->first('password') }}</span>
					</td>
				</tr>
				<tr>
					<td><br>Confirm Password</td>
					<td><br><input type="password" name="cpassword" value="{{old('cpassword')}}">

                     <span>{{ $errors->first('cpassword') }}</span>
					</td>
				</tr>
				<tr>
					<td><br>Address</td>
					<td><br><input type="text" name="address" value="{{old('address')}}">
                     
                     <span>{{ $errors->first('address') }}</span>

					</td>
				</tr>
				<tr>
					<td><br>Company Name</td>
					<td><br><input type="text" name="company" value="{{old('company')}}">

                    <span>{{ $errors->first('company') }}</span>
					</td>
				</tr>
				<tr>
					<td><br>Phone no</td>
					<td><br><input type="text" name="phone" value="{{old('phone')}}">

                     <span>{{ $errors->first('phone') }}</span>
					</td>
				</tr>
				<tr>
					<td><br>City</td>
					<td><br><input type="text" name="city" value="{{old('city')}}">

                     <span>{{ $errors->first('city') }}</span>
					</td>
				</tr>

				<tr>
					<td><br>Country</td>
					<td><br><input type="text" name="country" value="{{old('country')}}">

                    <span>{{ $errors->first('country') }}</span>

					</td>
				</tr>

                <tr>
					<td><br>Type</td>
					<td><br>
						<select name='type'>
							<option value="admin" {{ old('type') == "admin" ? 'selected' : '' }}> ADMIN </option>
							<option value="customer" {{ old('type') == "customer" ? 'selected' : '' }}> Customer </option>
							<option value="accountent" {{ old('type') == "accountent" ? 'selected' : '' }}>Accountent </option>
							<option value="snmp" {{ old('type') == "snmp" ? 'selected' : '' }}>Saler And Marketing </option>
						</select>
					
                      <span>{{ $errors->first('type') }}</span>

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