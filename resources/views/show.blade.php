@extends('layout') 

@section('titulo' ,'Portafolio | ' . $proyecto->title)
@section('content')

<h1> Proyecto {{$proyecto->title}}</h1>
<h2> Descripcion {{$proyecto->description}}</h2>


	

@endsection