<!DOCTYPE html>
<html>
<head>
	<title>Parameter Bor!!!</title>
</head>
<body>
	Daftar : <b>{{$data}} {{$data2}}</b>
	@foreach($query as $key)
	<ul>
	<li>{{$key}}</li>
	</ul>
	@endforeach	
</body>
</html>