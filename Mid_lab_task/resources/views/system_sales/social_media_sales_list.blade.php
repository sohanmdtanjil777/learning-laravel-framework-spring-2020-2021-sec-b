<!DOCTYPE html>
<html>
<head>
	<title>social media Sales</title>
</head>
<body>

<h1>go to <a href="{{ route('dashboard') }}">Dashboard</a></h1>  

<a href="/logout">logout</a><br><br>


<h1>social media sales</h1>

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

        @for($j=0; $j < count($s_m_s_list); $j++)
        <tr>
            <td>{{ $s_m_s_list[$j]['customer_name'] }}</td>
            <td>{{ $s_m_s_list[$j]['customer_address'] }}</td>
            <td>{{ $s_m_s_list[$j]['phone_no'] }}</td>
            <td>{{ $s_m_s_list[$j]['product_id'] }}</td>
            <td>{{ $s_m_s_list[$j]['product_name'] }}</td>
            <td>{{ $s_m_s_list[$j]['quantity'] }}</td>
            <td>{{ $s_m_s_list[$j]['total_price'] }}</td>
            <td>{{ $s_m_s_list[$j]['product_status'] }}</td>
            <td>
                <a href="/system_sales/product_details_social_media/{{$s_m_s_list[$j]['id']}}">Details</a>
            </td>
        </tr>
        @endfor
    </table>
</body>
</html>