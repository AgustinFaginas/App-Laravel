@extends('layout') 

@section('titulo' , 'datos')
@section('content')

<h1> Nombres</h1>

	<ul>
		
		@forelse($nombres as $nombreItem)

			<li> {{ $nombreItem['nombre'] }}</li>
		
		@empty
		 <li> No hay proyectos para mostrar </li>
		@endforelse

	</ul>

@endsection