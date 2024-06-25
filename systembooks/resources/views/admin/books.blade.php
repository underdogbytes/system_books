@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1 class="mb-5">Books</h1>

            <ul>
                @foreach ($books as $book)
                <li>
                    <a href="/books/{{ $book->id }}">{{ $book->name }}</a>
                </li>
                @endforeach
            </ul>

        </div>
    </div>
</div>
@endsection