<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body>
	<h1>Login Page</h1>

	<form method="post">
        @csrf 
		<fieldset>
			<legend>Login</legend>
			<div>
				{{session('msg')}}
			</div>
			<table>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="{{ old('email') }}">
                    
                    <span>{{ $errors->first('email') }}</span>
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="{{ old('password') }}">
                      
                     <span>{{ $errors->first('password') }}</span>

					</td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Submit"></td>
					<td></td>
				</tr>
			</table>
		</fieldset>
	</form>

    

</body>
</html>
