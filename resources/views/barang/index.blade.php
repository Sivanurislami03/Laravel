@extends('layouts.master')
    @section('konten')
	<center>List Book</center>
	<table border="1">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Kode Barang</th>
				<th>Harga Barang</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($barang as $data)
			<tr>
				<td>{{$data->nama}}</td>
				<td>{{$data->kode}}</td>
				<td>{{$data->harga}}</td>
				<td><a href="/barang/{{$data->id}}">Show</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	