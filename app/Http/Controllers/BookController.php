<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Carbon\Carbon;
class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('index', compact('books'));
    }

    public function form()
    {
        return view('form');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'page_count' => 'required|integer',
            'author_name' => 'required',
            'author_email' => 'required|email',
        ]);

        Book::create($request->all());
        return redirect()->route('book');
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $book->published_date = Carbon::parse($book->published_date);
        return view('edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'page_count' => 'required|integer',
            'author_name' => 'required',
            'author_email' => 'required|email',
        ]);

        $book = Book::findOrFail($id);
        $book->update($request->all());
        return redirect()->route('book');
    }

    public function delete($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->route('book');
    }
}
