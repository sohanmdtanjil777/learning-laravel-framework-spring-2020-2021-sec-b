<!DOCTYPE html>
<html>
<head>
	<title>Physical Store sales list</title>
</head>
<body>

<a href="/logout">logout</a><br><br>

<table border="1">
        <tr>
            <td>Product_id</td>
            <td>Product_name</td>
            <td>Price</td>
            <td>Quantity</td>
            <td>Customer Name</td>
            <td>Customer Id</td>
        </tr>

        @for($i=0; $i < count($p_s_list); $i++)
        <tr>
            <td>{{ $p_s_list[$i]['product_id'] }}</td>
            <td>{{ $p_s_list[$i]['product_name'] }}</td>
            <td>{{ $p_s_list[$i]['price'] }}</td>
            <td>{{ $p_s_list[$i]['quantity'] }}</td>
            <td>{{ $p_s_list[$i]['customer_name'] }}</td>
            <td>{{ $p_s_list[$i]['customer_id'] }}</td>
            

            <td>
                <a href="/home/delete/{{ $p_s_list[$i]['id'] }}">Delete</a> |
                <a href="{{route('home.details', [$p_s_list[$i]['id']]) }}">Details</a>
            </td>
        </tr>
        @endfor
    </table>
</body>
</html>