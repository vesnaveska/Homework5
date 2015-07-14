@extends('app');

@section('pagetitle')
    Books and their Users
@stop

@section('content')  
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Author</th>
                <th>Title</th>
                <th>Year</th>
                <th>Genre</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->year }}</td>
                    <td>{{ $book->genre }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
{!! $books->render() !!}
@stop