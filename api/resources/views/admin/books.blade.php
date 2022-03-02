@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1>Books</h1>

            <ul>
                @foreach ($books as $book)
                <li>{{ $book->name }}</li>
                <li>{{ $book->author }}</li>
                @endforeach
            </ul>

        </div>
    </div>
</div>
@endsection