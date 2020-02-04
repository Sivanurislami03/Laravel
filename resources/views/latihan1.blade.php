<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
	@foreach($siswa as $data)
	Nama : {{ $data['nama'] }} <br>
	Kelas : {{ $data['kelas'] }}
	<hr>
	@endforeach
</body>
</html>