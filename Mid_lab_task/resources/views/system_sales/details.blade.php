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
    <h1>Sold Product Details</h1>
    

            
			<table>

                 
				
				<tr>
					<td>Customer name: </td>
					<td>{{ $all_details['customer_name'] }}</td>
				</tr>
				<tr>
					<td>Customer Address</td>
					<td>{{ $all_details['customer_address'] }}</td>
				</tr>
				<tr>
					<td>Phone NO :</td>
					<td>{{ $all_details['phone_no'] }}</td>
				</tr>
                <tr>
					<td>Product Id</td>
					<td>{{ $all_details['product_id'] }}</td>
				</tr>
				<tr>
					<td>Product Name</td>
					<td>{{ $all_details['proudct_name'] }}</td>
				</tr>

				<tr>
					<td>Quantity</td>
					<td>{{ $all_details['quantity'] }}</td>
				</tr>

				<tr>
					<td>Total Price</td>
					<td>{{ $all_details['total_price'] }}</td>
				</tr>

				<tr>
					<td>Payment Type</td>
					<td>{{ $all_details['payment_type'] }}</td>
				</tr>

				<tr>
					<td>Product Status</td>
					<td>{{ $all_details['product_status'] }}</td>
				</tr>


				<tr>
					<td>Sold At</td>
					<td>{{ $all_details['created_at'] }}</td>
				</tr>

			</table>

			
</body>
</html>
