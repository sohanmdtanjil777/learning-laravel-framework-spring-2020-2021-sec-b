<!DOCTYPE html>
<html>
<head>
	<title>Physical Store sales list</title>
</head>
<body>

<h1>go to <a href="{{ route('dashboard') }}">Dashboard</a></h1>

<a href="/logout">logout</a><br><br>

<h1>Physical Store Sold Products</h1>

<table border="1">
        <tr>
            <td>customer_name</td>
            <td>customer_address</td>
            <td>phone_no</td>
            <td>product_id</td>
            <td>product_name</td>
            <td>quantity</td>
            <td>total_price</td>
            <td>product_status</td>
            <td>Details</td>
            
        </tr>

        @foreach ($physical_product_list as $p_s_list)
        <tr>
            <td>{{ $p_s_list->customer_name }}</td>
            <td>{{ $p_s_list->customer_address }}</td>
            <td>{{ $p_s_list->phone_no }}</td>
            <td>{{ $p_s_list->product_id }}</td>
            <td>{{ $p_s_list->product_name }}</td>
            <td>{{ $p_s_list->quantity }}</td>
            <td>{{ $p_s_list->total_price }}</td>
            <td>{{ $p_s_list->product_status }}</td>
            

            <td>
                <a href="/system_sales/product_details/{{ $p_s_list->id }}">Details</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>