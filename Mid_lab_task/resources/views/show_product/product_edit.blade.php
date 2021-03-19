<!DOCTYPE html>
<html>
<head>
	<title>Edit Product</title>
</head>
<body>
	<h1>go to <a href="{{ route('dashboard') }}">Dashboard</a></h1>
<form method="post">
    	@csrf
		<fieldset>
			<legend>Edit Product</legend>
			<table>

				<tr>
					<td><br>product_name</td>
					<td><br><input type="text" name="p_name" value="{{$product_details['product_name']}}">

                    <span>{{ $errors->first('p_name') }}</span>

					</td>
				</tr>
				
                
				<tr>
					<td><br>Category</td>
					<td><br><input type="text" name="category" value="{{$product_details['category']}}">

                     <span>{{ $errors->first('category') }}</span>
					</td>
				</tr>

				<tr>
					<td><br>unit_price</td>
					<td><br><input type="text" name="unit_price" value="{{$product_details['unit_price']}}">

                    <span>{{ $errors->first('unit_price') }}</span>
					</td>
				</tr>

				<tr>
					
					<label for="select">Select Product status</label>
                                        <select name="product_status">
                                             <!-----<option value=""></option>----->

                                             <option value="existing" @if($product_details['product_status'] == 'existing') selected @endif>Existing</option>

                                             <option value="upcomming" @if($product_details['product_status'] == 'upcomming') selected @endif>Up comming</option>

                                             
                                        </select>

				</tr>

				

				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Save Change"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>