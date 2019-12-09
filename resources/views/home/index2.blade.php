<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome USER! {{session('id')}}</h1>
    <a href="{{route('product.add')}}">Add Product</a> |
    <a href="{{route('product.index')}}">Product List</a>

	<a href="/logout">logout</a>

	<table>
        <tr>
        <td></td>
        <td></td>
        </tr>
	</table>

</body>
</html>
