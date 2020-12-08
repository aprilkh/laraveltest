<body>
	<a href="/home/tambah">Tambah</a>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>titleType</th>
			<th>primaryTitle</th>
			<th>runtimeMinutes</th>
			<th>genres</th>
		</tr>
		@foreach($movies as $m)
		<tr>
			<td>{{ $m->id }}</td>
			<td>{{ $m->titleType }}</td>
			<td>{{ $m->primaryTitle }}</td>
			<td>{{ $m->runtimeMinutes }}</td>
			<td>{{ $m->genres }}</td>
			<td>
				<a href="/home/edit/{{ $m->id }}">Edit</a>
				<a href="/home/detail/{{ $m->id }}">Detail</a>
				<a href="/home/delete/{{ $m->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</body>