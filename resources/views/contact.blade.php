@extends('layout') 

@section('titulo' , 'contact')
@section('content')

<h1> Contact </h1>

<form>
	<input name="name" placeholder="Nombre"><br>
	<input name="subjet" placeholder="Asunto"><br>
	<input type="email" name="email" placeholder="email"><br>
	<textarea name="content" placeholder="Mensaje..."></textarea><br>

	<button>Enviar</button>
</form>

@endsection