<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome Home! {{session('id')}}</h1>

	<a href="{{route('student.add')}}">Add user</a> |
	<a href="{{route('student.index')}}">UserList</a> |
	<a href="/logout">logout</a>

	<table>
        <tr>
        <td></td>
        <td></td>
        </tr>
	</table>

</body>
</html>
