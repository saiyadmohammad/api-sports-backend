@extends('layout')


@section('content')

<pre>{{ json_encode($page, JSON_PRETTY_PRINT) }}</pre>





@endsection