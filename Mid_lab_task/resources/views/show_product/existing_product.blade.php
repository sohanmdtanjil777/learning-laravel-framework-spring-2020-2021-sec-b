<!DOCTYPE html>
<html>
<head>
	<title>existing Product</title>
</head>
<body>
<h1>existing Product</h1>

    <table border="1">
        <tr>
          
            <td>product_name</td>
            <td>category</td>
            <td>unit_price</td>
            <td>product_status</td>
            
        </tr>

        @for($j=0; $j < count($existing); $j++)
        <tr>
          
            <td>{{ $existing[$j]['product_name'] }}</td>
            <td>{{ $existing[$j]['category'] }}</td>
            <td>{{ $existing[$j]['unit_price'] }}</td>
            <td>{{ $existing[$j]['p_status'] }}</td>
            

            <td>
                <a href="/system_sales/product_details/{{$existing[$j]['id']}}">Details</a>
            </td>
        </tr>
        @endfor
    </table>
</body>
</html>
</body>
</html>