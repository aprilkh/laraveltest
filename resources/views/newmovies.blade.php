<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Add New Movie</title>
</head>
<body>
	<h1>Add New Movie</h1>
	<form action="/home/simpan" method="post">
		{{ csrf_field() }}
		Id <input type="text" name="id" required="required"> <br />
		titleType <input type="text" name="titleType" required="required"> <br />
		primaryTitle <input type="text" name="primaryTitle" required="required"> <br />
		originalTitle <input type="text" name="originalTitle" required="required"> <br />
		isAdult <input type="text" name="isAdult" required="required"> <br />
		startYear <input type="text" name="startYear" required="required"> <br />
		endYear <input type="text" name="endYear" required="required"> <br />
		runtimeMinutes <input type="text" name="runtimeMinutes" required="required"> <br />
		genres <input type="text" name="genres" required="required"> <br />
		<input type="submit" value="Add">
	</form>
</body>
</html>
