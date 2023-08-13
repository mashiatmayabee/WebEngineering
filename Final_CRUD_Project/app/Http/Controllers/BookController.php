<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use PDF;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return books view
        $books = Book::OrderBy('id', 'desc')->paginate(13);
        return view('books.index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => ['required'],
            'isbn' => ['required'],
            'price' => ['required', 'numeric'],
            'availability' => ['required', 'numeric']
        ]);

        $book = Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'isbn' => $request->isbn,
            'price' => $request->price,
            'availability' => $request->availability
        ]);
        return redirect()->route('books.index')->with('success', 'Book created successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required',
            'author' => ['required'],
            'isbn' => ['required'],
            'price' => ['required', 'numeric'],
            'availability' => ['required', 'numeric']
        ]);

        $book = Book::create([
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'isbn' => $request->input('isbn'),
            'price' => $request->input('price'),
            'availability' => $request->input('availability')
        ]);
        return redirect()->route('books.index')->with('success', 'Book updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Deleted successfully');
    }
    public function search(Request $request)
    {
        $request->validate([
            'search' => 'required'
        ]);

        $search = $request->input('search');
        $books = Book::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('author', 'LIKE', "%{$search}%")
            ->paginate(10);

        return view('books.index', ['books' => $books]);
    }
    public function generatePDF()
    {
        $books = Book::OrderBy('id', 'desc')->get();
        $pdf = PDF::loadView('books.download', ['books' => $books]);
        return $pdf->download('books.pdf');
    }

    
}
