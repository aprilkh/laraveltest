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
	<form action="/home" method="get">
		{{ csrf_field() }}
		id : {{ $m->id }} <br />
		titleType : {{ $m->titleType }} <br />
		primaryTitle : {{ $m->primaryTitle }} <br />
		originalTitle : {{ $m->originalTitle }} <br />
		isAdult : {{ $m->isAdult }} <br />
		startYear : {{ $m->startYear }} <br />
		endYear : {{ $m->endYear }} <br />
		runtimeMinutes : {{ $m->runtimeMinutes }} <br />
		genres : {{ $m->genres }} <br />
	</form>
	@endforeach
	<a href="/home">Kembali</a>
</body>
</html>
