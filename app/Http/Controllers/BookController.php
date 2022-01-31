<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Symfony\Contracts\Service\Attribute\Required;

class BookController extends Controller
{
    public function home() {
        $books = Book::all();
        return view('pages.bookHome', compact('books'));
    }
    public function show($id) {
        
        $book = Book::findOrFail($id);

        return view('pages.bookShow', compact('book'));
    }
    public function create() {
        return view('pages.bookcreate');
    }
    public function store(Request $request) {
        
        $data = $request -> validate([
            'title' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'release_date' => 'required|date',
            'pages' => 'required|numeric',

        ]);
        
        $book = Book::create($data);

        return redirect() -> route('showBook', $book -> id);

    }
    public function edit($id) {
        $book = Book::findOrFail($id);
        return view('pages.bookEdit', compact('book'));
    }
    public function update(Request $request, $id) {
        $data = $request -> validate([
            'title' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'release_date' => 'required|date',
            'pages' => 'required|numeric',

        ]);
        $book = Book::findOrFail($id);
        $book ->update($data);
       
        return redirect() -> route('homeBook');
        // return redirect() -> route('showBook', $book -> id);
    }
    public function delete($id) {
        $book = Book::findOrfail($id);
        $book -> delete();

        return redirect() -> route('homeBook');

    }
}
