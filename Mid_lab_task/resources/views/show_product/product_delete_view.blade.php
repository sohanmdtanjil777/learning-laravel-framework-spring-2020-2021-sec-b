<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete product</title>
</head>
<h1>go to <a href="{{ route('dashboard') }}">Dashboard</a></h1>
<body>
    <h1>Delete Product Record</h1>
    
			<table>
				<tr>
					<td>Product Name: </td>
					<td>{{$delete_product['product_name']}}</td>
				</tr>
				<tr>
					<td>Category</td>
					<td>{{ $delete_product['category']}}</td>
				</tr>
				<tr>
					<td>Unit Price:</td>
					<td>{{ $delete_product['unit_price']}}</td>
				</tr>
                <tr>
					<td>Product Status</td>
					<td>{{ $delete_product['p_status'] }}</td>
				</tr>
				<tr>
					<td>Added At</td>
					<td>{{ $delete_product['created_at'] }}</td>
				</tr>
				<tr>
					<td>
						<h3>Are you sure You want to delete this record?</h3>
					</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<form method="post">
							@csrf
							<input type="submit" name="submit" value="Confirm">
						</form>
					</td>
					<td></td>
				</tr>
			</table>
</body>
</html>
