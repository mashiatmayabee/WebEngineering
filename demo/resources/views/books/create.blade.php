@extends('layouts/layout')
@section('title')
New Book
@endsection

@section('content')
<form action="{{route('books.store')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="title">title</label>
            <input type="text" name="title" id="title" class="form-control"  value="{{old('title')}}">

            @error('title')
            <div class="text-small text-danger">{{ $message }}</div>
            @enderror
           
        </div>
        <div class="form-group">
            <label for="author">author</label>
            <input type="text" name="author" id="author" class="form-control" value="{{old('author')}}" >
            @error('author')
            <div class="text-small text-danger">{{ $message }}</div>
            @enderror
             
        </div>
        <div class="form-group">
            <label for="isbn">isbn</label>
            <input type="text" name="isbn" id="isbn" class="form-control" value="{{old('isbn')}}" >
            @error('isbn')
            <div class="text-small text-danger">{{ $message }}</div>
            @enderror
            
        </div>
        <div class="form-group">
            <label for="price">price</label>
            <input type="text" name="price" id="price" class="form-control" value="{{old('price')}}">
            @error('price')
            <div class="text-small text-danger">{{ $message }}</div>
            @enderror
            
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('books.index')}}" class="btn btn-secondary">Cancel</a>



    </form>


@endsection