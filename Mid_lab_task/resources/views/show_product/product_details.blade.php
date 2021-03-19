<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
</head>
<body>

	<h1>go to <a href="{{ route('dashboard') }}">Dashboard</a></h1>
    <h1>Product Details</h1>
    <a href=""> Back</a>

            
			<table>

                 
				
				<tr>
					<td>Product Name: </td>
					<td>{{ $product_details['product_name'] }}</td>
				</tr>
				<tr>
					<td>Category</td>
					<td>{{ $product_details['category'] }}</td>
				</tr>
				<tr>
					<td>Unit Price :</td>
					<td>{{ $product_details['unit_price'] }}</td>
				</tr>
                <tr>
					<td>Product Status</td>
					<td>{{ $product_details['p_status'] }}</td>
				</tr>
				<tr>
					<td>Added at</td>
					<td>{{ $product_details['created_at'] }}</td>
				</tr>

				

			</table>

			
</body>
</html>
