@extends('app')

@section('title','About Us | ' . config('app.name'))

@section('content')
<img src="{{asset('/images/tdn-logo.png')}}" alt="tdn-logo" class=" my-12 rounded-full shadow-md h-64">
        <h2 class="mb-5 text-gray-700">Built with <span class="text-pink-500">&hearts;</span> by LES TEACHERS DU NET.</h2>
        <p>
        <a href="{{route('home')}}" class="text-indigo-500 hover:text-indigo-900 underline">Revenir a la page d'accueil</a>
        </p>
@endsection('content')

