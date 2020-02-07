@extends('layouts.master')
    @section('konten')
	<center>List Book</center>
	<table border="1">
		<thead>
			<tr>
				<th>Title</th>
				<th>Publisher</th>
				<th>Pages</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($book as $data)
			<tr>
				<td>{{$data->title}}</td>
				<td>{{$data->publisher}}</td>
				<td>{{$data->pages}}</td>
				<td><a href="/buku/{{$data->id}}">Show</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>