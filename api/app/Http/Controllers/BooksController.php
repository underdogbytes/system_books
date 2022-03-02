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
}
