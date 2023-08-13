@extends('layout.layout')

@section('title')
books
@endsection

@section('content')

            <h1>Books</h1>

            <table class="table  table-striped table-bordered">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>title</th>
                        <th>author</th>
                        <th>isbn</th>
                        <th>price</th>
                        <th>availability</th>
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
                    </tr>
                    @endforeach
                </tbody>
            </table>

@endsection