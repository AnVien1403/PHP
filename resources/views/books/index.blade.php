

@extends('layout')

@section('content')
    <h1>Library Management</h1>

    <h2>All Books</h2>
    <ul>
        @forelse($books as $book)
            <li>{{ $book->title }} by {{ $book->authorid }} (ISBN: {{ $book->ISBN }}, Published Year: {{ $book->pub_year }})</li>
        @empty
            <li>No books available</li>
        @endforelse
    </ul>

    <h2>Search Books by Name</h2>
{{--    <form action="{{ route('books.search') }}" method="post">--}}
{{--        @csrf--}}
{{--        <label for="search">Enter book name:</label>--}}
{{--        <input type="text" name="search" id="search">--}}
{{--        <button type="submit">Search</button>--}}
{{--    </form>--}}
@endsection
