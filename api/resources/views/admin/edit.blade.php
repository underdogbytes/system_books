@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1 class="mb-5">Edit Book</h1>

            <div class="form-group">
                <label>Name</label>
                <input class="input-group" placeholder="{{ $book->name }}" />
            </div>

            <div class="form-group">
                <label>Author</label>
                <input class="input-group" placeholder="{{ $book->author }}" />
            </div>

            <div class="form-group">
                <label>Photo</label>
                <input class="input-group" type="file" />
            </div>

        </div>
    </div>
</div>
@endsection