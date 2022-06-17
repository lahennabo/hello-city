@extends('app')

@section('content')
    <img src="{{asset('/images/quebec-flag.jpg')}}" alt="Quebec flag" class=" mt-12 rounded shadow-md h-32">
    <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello from Quebc!</h1>
    <p class="mt-6 text-lg text-gray-800">It's currently {{ date('h:i A')}}. </p>
@endsection

