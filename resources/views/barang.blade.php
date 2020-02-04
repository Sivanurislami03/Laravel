<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>Data Barang</center>
	@foreach($dabar as $data)
	Nama : {{$data->nama}}<br>
	Kode Barang : {{$data->kode}}<br>
	Harga Barang : {{$data->harga}}<br>
	<img src="{{$data->foto}}" alt="">
	<hr>
	@endforeach
</body>
</html>