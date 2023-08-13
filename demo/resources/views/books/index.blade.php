@extends('layouts.layout')
@section('title')
books
@endsection

@section('content')
    <h1>Books</h1>
    <a href="{{route('books.create')}}" class="btn btn-primary mb-3">Add new book</a>
    <table class="table  table-striped">
        <thead class="bg-dark text-white">
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>ISBN</th>
                <th>Price</th>
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