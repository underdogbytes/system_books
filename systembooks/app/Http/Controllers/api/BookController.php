<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * GET - http://127.0.0.1:8000/api/books
     */
    public function index()
    {
        return Book::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * POST - http://127.0.0.1:8000/api/books?name=Spider Man&author=JJ&photo=I WANT MIRANHA PHOTOS ON MY DESK!!
     */
    public function store(Request $request)
    {
        return Book::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Book::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Book::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * PUT - http://127.0.0.1:8000/api/books/1?photo=NOW I HAVE A PHOTO???
     */
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * DELETE - http://127.0.0.1:8000/api/books/1
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
    }
}
