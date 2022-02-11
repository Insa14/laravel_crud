@extends('app')

@section('title', '게시물리스트')



@section('content')
    <ul>
        @foreach ($articles as $article)
            <li>{{ $article->title }}</li>
        @endforeach
    </ul>
@endsection
