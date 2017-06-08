<!DOCTYPE html>
<html>
<head>
	<title>Looping</title>
</head>
<body>
		@for($a=1; $a <=$nomor;$a++ )
		{{$a}}
		@endfor
		@foreach($buah as $data)
				{{$data}}<hr>
		@endforeach

</body>
</html>