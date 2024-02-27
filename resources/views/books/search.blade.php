@extends('layout')

@section('content')
    <h1>Search Results</h1>
    <ul>
        @foreach ($results as $result)

        @endforeach
    </ul>
@endsection
