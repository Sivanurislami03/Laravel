<!DOCTYPE html>
<html>
<head>
	<title>Show Data</title>
</head>
<body>
	<fieldset>
		<legend>Show Data</legend>
		Title : <b>{{$book->title}}</b><br>
		Publisher : <b>{{$book->publisher}}</b><br>
		Price : <b>{{$book->price}}</b><br>
		Page : <b>{{$book->pages}}</b><br>
		Synopsis : <b>{{$book->synopsis}}</b><br>
		Status : <b>@if($book->status == 1)
		         Premium
		         @else
		         Pirated
		         @endif
		         </b><br>
		Date : <b>{{$book->date}}</b>
	</fieldset>
</body>
</html>