@extends('layout')


@section('content')
<h1 class="text-5xl font-bold text-red-500 bg-yellow-200">Test Tailwind</h1>

<pre>{{ json_encode($page, JSON_PRETTY_PRINT) }}</pre>





@endsection