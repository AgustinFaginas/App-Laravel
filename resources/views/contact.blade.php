@extends('layout') 

@section('titulo' , 'contact')
@section('content')

<h1> @lang("Contact") </h1>

<form method="post" action="{{ route ('contact')}}">
	
	
	@csrf
	<input name="name" placeholder="Nombre" value="{{old('name')}}" ><br>
	{!!$errors->first('name', '<small>:message</small>')!!}<br>

	<input name="subjet" placeholder="Asunto" value="{{old('subjet')}}"><br>
	{!!$errors->first('subjet', '<small>:message</small>')!!}<br>

	<input type="email" name="email" placeholder="email" value="{{old('email')}}"><br>
	{!!$errors->first('email', '<small>:message</small>')!!}<br>

	<textarea name="content" placeholder="Mensaje..." value="{{old('content')}}"></textarea><br>
	{!!$errors->first('content', '<small>:message</small>')!!}<br>

	<button>Enviar</button>
</form>

@endsection