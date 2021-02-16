@extends('layout') 

@section('titulo' , 'datos')
@section('content')

<h1> Proyectos</h1>

	<ul>
		
		@forelse($proyectos ?? '' as $proyectoItem)

			<li> {{ $proyectoItem['Proyecto'] }}</li>
		
		@empty
		 <li> No hay proyectos para mostrar </li>
		@endforelse

	</ul>

@endsection