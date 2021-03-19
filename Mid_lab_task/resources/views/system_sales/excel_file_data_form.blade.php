<!DOCTYPE html>
<html>
<head>
	<title>Physical Store sales list</title>
</head>
<body>

<h1>go to <a href="{{ route('dashboard') }}">Dashboard</a></h1>

<a href="/logout">logout</a><br><br>

<h1>Physical Store Sold Products</h1>

<div>
    <form enctype="multipart/form-data" method="post">

        @csrf
        <fieldset>
        <legend>Extract DAta</legend>
            <div>
            <input type="file" name="excel_file">

            </div>

            <div>
                
                <button type="submit">Submit</button>
            </div>
        
        </fieldset>
    </form>
</div>



 
</body>
</html>