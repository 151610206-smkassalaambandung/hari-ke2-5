<!DOCTYPE html>
<html>
<head>
	<title>TugasH3</title>
</head>
<body>
		
		@foreach($buah as $data)
				{{$data}}<hr>
		@endforeach

		<br>@foreach($komputer as $data)
				{{$data}}<hr>
		@endforeach
				
		<br>@foreach($mahluk as $data)
				{{$data}}<hr>
		@endforeach
</body>
</html>