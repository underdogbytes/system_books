<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\api\BookController;

class BooksController extends Controller
{
    public function __construct(BookController $books)
    {
        $this->middleware('auth');
        $this->books = $books;
    }
    
    public function index()
    {
        $books = $this->books->index();

        return view('admin.books', ['books' => $books]);
    }

    public function show($id)
    {
        $book = $this->books->show($id);

        return view('admin.show', ['book' => $book]);
    }

    public function edit($id)
    {
        $book = $this->books->edit($id);

        return view('admin.edit', ['book' => $book]);
    }
}
