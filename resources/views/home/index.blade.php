<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@foreach ($data as $v)
{{$v->title}}
{{$v->text}}
@endforeach
home
</body>
</html>