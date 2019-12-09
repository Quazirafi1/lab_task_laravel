<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
</head>
<body>
<h1>Edit User</h1>
<a href="{{route('product.index')}}">Back</a> |
<a href="/logout">logout</a>

<form method="post">
    <table border="1">

        <tr>
            <td>NAME</td>
            <td><input type="text" name="name" value="{{$std['name']}}"></td>
        </tr>
        <tr>
            <td>QUANTITY</td>
            <td><input type="text" name="quantity" value="{{$std['quantity']}}"></td>
        </tr>
        <tr>
            <td>PRICE</td>
            <td><input type="text" name="price" value="{{$std['price']}}"></td>
        </tr>

        <tr>
            <td><input type="submit" name="submit" value="update"></td>
            <td></td>
        </tr>
    </table>
</form>

</body>
</html>
