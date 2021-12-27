@extends('layouts.front')

@section('content')
    <ul>
        @foreach($pages as $page)
          {{--  <li>{{ $page->title }} - {{ $page->body }} - <a href="{{ route('sayfa-goster', ['slug' => $page->slug]) }}">Devamı..</a> </li> --}}
            <li>{{ $page->title }} - {{ $page->body }} - <a href="{{ route('sayfa-goster', ['page' => $page->slug]) }}">Devamı..</a> </li>
        @endforeach
    </ul>
@endsection

