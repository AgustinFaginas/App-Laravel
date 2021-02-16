@extends('layout') 

@section('titulo' , 'home')
@section('content')


<h1>Home</h1>

	Bienvendi@  {{$nombre ?? "Invitado"}}

@endsection





