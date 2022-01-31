<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class HomeController extends Controller
{
    public function homePage() {
        return view('pages.home');
    }
    public function home() {
        $comics = Comic::all();

        return view('pages.comicHome', compact('comics'));

    }
    public function show($id) {
        $comic = Comic::findOrFail($id);

        return view('pages.show', compact('comic'));
    }
    public function create() {
        return view('pages.create');
    }
    public function store(Request $request) {

        $data = $request -> validate([
            'title' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'release_date' => 'required|date',
            'pages' => 'required|numeric'
        ]);

        $comic = Comic::create($data);

        // return redirect() -> route('home');
        return redirect() -> route('show', $comic -> id);
    }
    public function edit($id) {
        $comic = Comic::findOrFail($id);

        return view('pages.edit', compact('comic'));

    }
    public function update(Request  $request, $id) {
        $data = $request -> validate([
            'title' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'release_date' => 'required|date',
            'pages' => 'required|numeric'
        ]);

        $comic = Comic::findOrFail($id);

        $comic -> update($data);

        return redirect() -> route('home');
        // return redirect() -> route('show', $comic -> id);

    }
    public function delete($id) {
        $comic = Comic::findOrFail($id);
        $comic -> delete();


        return redirect() -> route('home');

    }
}
