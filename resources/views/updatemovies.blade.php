<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	@foreach($movies as $m)
	<form action="/home/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->id }}"> <br />
		titleType <input type="text" required="required" name="titleType" value="{{ $m->titleType }}"> <br />
		primaryTitle <input type="text" required="required" name="primaryTitle" value="{{ $m->primaryTitle }}"> <br />
		originalTitle <input type="text" required="required" name="originalTitle" value="{{ $m->originalTitle }}"> <br />
		isAdult <input type="text" required="required" name="isAdult" value="{{ $m->isAdult }}"> <br />
		startYear <input type="text" required="required" name="startYear" value="{{ $m->startYear }}"> <br />
		endYear <input type="text" required="required" name="endYear" value="{{ $m->endYear }}"> <br />
		runtimeMinutes <input type="text" required="required" name="runtimeMinutes" value="{{ $m->runtimeMinutes }}"> <br />
		genres <input type="text" required="required" name="genres" value="{{ $m->genres }}"> <br />
		<input type="submit" value="Update">
	</form>
	@endforeach
</body>
</html>
