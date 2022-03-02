@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1 class="mb-5">The Book: {{ $book->name }}</h1>

            <div>
                {{ $book }}
            </div>

            <div class="mt-5">
                <a href="/books/{{ $book->id }}/edit">Edit</a>
            </div>
        </div>
    </div>
</div>
@endsection