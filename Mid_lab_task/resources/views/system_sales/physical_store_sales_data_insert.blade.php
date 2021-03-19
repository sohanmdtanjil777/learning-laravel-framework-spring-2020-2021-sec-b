<!DOCTYPE html>
<html>
<head>
	<title>Insert Physical Store sales data</title>
</head>
<body>

<h1>go to <a href="{{ route('dashboard') }}">Dashboard</a></h1>

<h1>Physical STore sales data insert</h1>
<form method="post">
    	@csrf
		<fieldset>
			<legend>Add</legend>
			<table>
				
				<tr>
					<td>Customer Name</td>
					<td><input type="text" name="cname" value="{{old('cname')}}">

                   <span>{{ $errors->first('cname') }}</span>
					</td>
				</tr>
                <tr>
					<td><br>Customer Address</td>
					<td><br><input type="text" name="c_address" value="{{old('c_address')}}">
                     
                     <span>{{ $errors->first('c_address') }}</span>

					</td>
				</tr>
				<tr>
					<td><br>Phone no</td>
					<td><br><input type="text" name="phone" value="{{old('phone')}}">

                     <span>{{ $errors->first('phone') }}</span>
					</td>
				</tr>

				<tr>
					<td><br>product_id</td>
					<td><br><input type="text" name="p_id" value="{{old('p_id')}}">
                      
                    <span>{{ $errors->first('p_id') }}</span>

					</td>
				</tr>
				<tr>
					<td><br>product_name</td>
					<td><br><input type="text" name="p_name" value="{{old('p_name')}}">

                    <span>{{ $errors->first('p_name') }}</span>

					</td>
				</tr>
				<tr>
					<td><br>unit_price</td>
					<td><br><input type="text" name="unit_price" value="{{old('unit_price')}}">

                    <span>{{ $errors->first('unit_price') }}</span>
					</td>
				</tr>
				<tr>
					<td><br>Quantity</td>
					<td><br><input type="text" name="quantity" value="{{old('quantity')}}">

                     <span>{{ $errors->first('quantity') }}</span>
					</td>
				</tr>
				
				<tr>
					<td><br>Total Price</td>
					<td><br><input type="text" name="total_price" value="{{old('total_price')}}">

                    <span>{{ $errors->first('total_price') }}</span>
					</td>
				</tr>
				<tr>
					<td><br>Payment Type</td>
					<td><br><input type="text" name="payment_type" value="{{old('payment_type')}}">

                     <span>{{ $errors->first('payment_type') }}</span>
					</td>
				</tr>

				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Store"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>