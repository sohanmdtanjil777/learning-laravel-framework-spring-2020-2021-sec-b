<!DOCTYPE html>
<html>
<head>
	<title>existing Product</title>
</head>
<body>
      <h1>go to <a href="{{ route('dashboard') }}">Dashboard</a></h1>
<h1>Existing Product</h1>

    <table border="1">
        <tr>
          
            <td>product_name</td>
            <td>category</td>
            <td>unit_price</td>
            <td>product_status</td>
            <td>Details</td>
            <td>Edit</td>
            <td>Delete</td>
            
        </tr>

        @for($j=0; $j < count($existing); $j++)
        <tr>
          
            <td>{{ $existing[$j]['product_name'] }}</td>
            <td>{{ $existing[$j]['category'] }}</td>
            <td>{{ $existing[$j]['unit_price'] }}</td>
            <td>{{ $existing[$j]['p_status'] }}</td>
            

            <td>
                <a href="/existing/product_details/{{$existing[$j]['id']}}">Details</a>
            </td>
            <td>
                <a href="/existing/product_edit/{{$existing[$j]['id']}}">Edit</a>
            </td>
            <td>
                <a href="/existing/product_delete/{{$existing[$j]['id']}}">Delete</a>
            </td>

        </tr>
        @endfor
    </table>
</body>
</html>
