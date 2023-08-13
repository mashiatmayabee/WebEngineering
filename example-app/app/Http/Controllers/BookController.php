<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function listAllBooks(){
        $books = Book::where("title", "like", "%he%")->get();
        return view('hello')-> with("books", $books);
    }
    public function stockHigh(){
        $books = Book::where("stock", ">", "80")->get();
        return view('hello')-> with("books", $books);
    }
}
