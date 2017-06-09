<!DOCTYPE html>
<html>
<head>
	<title>Parameter Bor!!!</title>
</head>
<body>
	<h1>Daftar : {{$id}}</h1>
	@foreach ($waw as $win)
	<li>{{ $win }}</li>
	@endforeach
	<h1>Daftar : {{$id2}}</h1>
	@foreach ($dul as $won)
	<li>{{  $won }}</li>
	@endforeach
	
</body>
</html>