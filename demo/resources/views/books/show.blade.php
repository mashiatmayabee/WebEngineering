@extends('layouts.layout')

@section('title')
books
@endsection

@section('content')
<div class="mt-3 ">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">{{$book->title}}</h5>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Title        :</b> {{$book->title}}</li>
            <li class="list-group-item"><b>Author       :</b> {{$book->author}}</li>
            <li class="list-group-item"><b>ISBN         :</b> {{$book->isbn}}</li>
            <li class="list-group-item"><b>Price        :</b> {{$book->price}}</li>
            <li class="list-group-item"><b>Availability :</b> {{$book->availability}}</li>

        </ul>
        <div class="card-body">
            <a href="{{route('books.index')}}" class="btn btn-secondary">Back</a>
            <a href="{{route('books.edit', $book->id)}}" class="btn btn-primary">Edit</a>
            <form action="{{route('books.destroy', $book->id)}}" method="post" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection