@extends('layouts.front')

@section('content')
<div style="margin-top: 10px">
    <span style="font-size: 24px">{{ $page->title }}</span>
    <br>
    <span>{{ $page->body }}</span>
    <br>
    <a href="{{ route('sayfa-index') }}">Tüm içeriği göster</a>
</div>
@endsection

