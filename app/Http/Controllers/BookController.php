<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('books.index', ['books' => $books]);
    }

    public function create(){
        return view('books.create');
    }

    public function store(Request $request){
        $validatedData = $this->validateBook($request);
        $book = Book::create($validatedData);
        return response()->json($book, 201);
    }

    public function show($id){
        try {
            $book = Book::findOrFail($id);
            return view('books.show', ['book' => $book]);
        } catch (ModelNotFoundException $e) {
            return view('errors.404');
        }
    }

    public function edit($id){
        try {
            $book = Book::findOrFail($id);
            return response()->json($book);
        } catch (ModelNotFoundException $e) {
            return view('errors.404');
        }
    }

    public function update(Request $request, $id){
        $validatedData = $this->validateBook($request);
        $book = Book::findOrFail($id);
        $book->update($validatedData);
        return response()->json($book);
    }

    public function destroy($id){
        $book = Book::findOrFail($id);
        $book->delete();
        return response()->json(null, 204);
    }

    private function validateBook(Request $request) {
        return $request->validate([
            'name' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'photo' => 'nullable|url',
            'description' => 'nullable|string',
            'published_date' => 'nullable|date',
            'ISBN' => 'nullable|string|max:13',
            'genre' => 'nullable|string|max:255',
            'publisher' => 'nullable|string|max:255',
            'pages' => 'nullable|integer',
            'language' => 'nullable|string|max:255',
        ]);
    }
}
