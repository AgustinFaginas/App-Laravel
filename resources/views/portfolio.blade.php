@extends('layout') 

@section('titulo' , 'datos')
@section('content')

<h1> Proyectos</h1>

	<ul>
		
		@forelse($proyectos ?? '' as $proyectoItem)

			<li> <a href="{{route('portfolio.show',$proyectoItem)}}">{{ $proyectoItem->title }}</a></li>
		
		@empty
		 <li> No hay proyectos para mostrar </li>
		@endforelse

		{{$proyectos->links()}}

	</ul>

@endsection