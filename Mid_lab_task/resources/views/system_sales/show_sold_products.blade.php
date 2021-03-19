<!DOCTYPE html>
<html>
<head>
	<title>Physical Store sales list</title>
</head>
<body>

<h1>go to <a href="{{ route('dashboard') }}">Dashboard</a></h1>

<a href="/logout">logout</a><br><br>

<h1>Today's Sold Products</h1>

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

        @foreach ($current as $current_sales)
        <tr>
            <td>{{ $current_sales->customer_name }}</td>
            <td>{{ $current_sales->customer_address }}</td>
            <td>{{ $current_sales->phone_no }}</td>
            <td>{{ $current_sales->product_id }}</td>
            <td>{{ $current_sales->product_name }}</td>
            <td>{{ $current_sales->quantity }}</td>
            <td>{{ $current_sales->total_price }}</td>
            <td>{{ $current_sales->product_status }}</td>
            

            <td>
                <a href="/system_sales/product_details/{{ $current_sales->id }}">Details</a>
            </td>
        </tr>
        @endforeach
    </table>

    <h1>Last seven days Sold Products</h1>

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

        @for($j=0; $j < count($seven); $j++)
        <tr>
            <td>{{ $seven[$j]['customer_name'] }}</td>
            <td>{{ $seven[$j]['customer_address'] }}</td>
            <td>{{ $seven[$j]['phone_no'] }}</td>
            <td>{{ $seven[$j]['product_id'] }}</td>
            <td>{{ $seven[$j]['product_name'] }}</td>
            <td>{{ $seven[$j]['quantity'] }}</td>
            <td>{{ $seven[$j]['total_price'] }}</td>
            <td>{{ $seven[$j]['product_status'] }}</td>
            

            <td>
                <a href="/system_sales/product_details/{{$seven[$j]['id']}}">Details</a>
            </td>
        </tr>
        @endfor
    </table>
</body>
</html>