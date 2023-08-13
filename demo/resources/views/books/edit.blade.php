@extends('layouts/layout')
@section('title')
New Book
@endsection

@section('content')
<form action="{{route('books.update', ['book' => $book])}}" method="post">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="title">title</label>
            <input type="text" name="title" id="title" class="form-control"  value="{{$book->title? $book->title:old('title')}}">

            @error('title')
            <div class="text-small text-danger">{{ $message }}</div>
            @enderror
           
        </div>
        <div class="form-group">
            <label for="author">author</label>
            <input type="text" name="author" id="author" class="form-control" value="{{$book->author ? $book->author : old('author')}}" >
            @error('author')
            <div class="text-small text-danger">{{ $message }}</div>
            @enderror
             
        </div>
        <div class="form-group">
            <label for="isbn">isbn</label>
            <input type="text" name="isbn" id="isbn" class="form-control" value="{{$book-isbn ? $book->isbn : old('isbn')}}" >
            @error('isbn')
            <div class="text-small text-danger">{{ $message }}</div>
            @enderror
            
        </div>
        <div class="form-group">
            <label for="price">price</label>
            <input type="text" name="price" id="price" class="form-control" value="{{$book->price ? $book->isbn :  old('price')}}">
            @error('price')
            <div class="text-small text-danger">{{ $message }}</div>
            @enderror
            
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('books.index')}}" class="btn btn-secondary">Cancel</a>



    </form>


@endsection