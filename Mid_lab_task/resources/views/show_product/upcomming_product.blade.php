<!DOCTYPE html>
<html>
<head>
	<title>Upcomming Product</title>
</head>
<body>

    <h1>go to <a href="{{ route('dashboard') }}">Dashboard</a></h1>
<h1>Upcomming Product</h1>

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

        @for($j=0; $j < count($upcomming); $j++)
        <tr>
          
            <td>{{ $upcomming[$j]['product_name'] }}</td>
            <td>{{ $upcomming[$j]['category'] }}</td>
            <td>{{ $upcomming[$j]['unit_price'] }}</td>
            <td>{{ $upcomming[$j]['p_status'] }}</td>
            

            <td>
                <a href="/upcomming/product_details/{{$upcomming[$j]['id']}}">Details</a>
            </td>
            <td>
                <a href="/upcomming/product_edit/{{$upcomming[$j]['id']}}">Edit</a>
            </td>
            <td>
                <a href="/upcomming/product_delete/{{$upcomming[$j]['id']}}">Delete</a>
            </td>

        </tr>
        @endfor
    </table>
</body>
</html>