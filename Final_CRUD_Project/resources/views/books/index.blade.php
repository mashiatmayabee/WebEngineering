@extends('layouts.layout')
@section('title')
books
@endsection

@section('content')
    <h1>Books</h1>
        <!-- create a search bar -->
        <form action="{{route('books.search')}}" method="get">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="search" placeholder="Search books" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                </div>
            </div>

    <a href="{{route('books.create')}}" class="btn btn-primary mb-3">Add new book</a>
    <!-- create a download button -->
    <a href="{{route('books.generatePDF')}}" class="btn btn-primary mb-3">Download</a>
    <table class="table  table-striped">
        <thead class="bg-dark text-white">
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>ISBN</th>
                <th>Price</th>
                <th>Availability</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->isbn}}</td>
                <td>{{$book->price}}</td>
                <td>{{$book->availability}}</td>
                <td>
                    <a href="{{route('books.show', $book->id)}}" class="btn btn-sm btn-secondary">View</a>
                    <a href="{{route('books.edit', $book->id)}}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{route('books.destroy', $book->id)}}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{$books->links()}}
    </div>
@endsection