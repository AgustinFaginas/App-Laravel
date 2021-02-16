@extends('layout') 

@section('titulo' , 'Home')


@section('content')
	

	<h1>Home</h1>

	Bienvendi@  {{$nombre ?? "Invitado"}}


@endsection

</html>
