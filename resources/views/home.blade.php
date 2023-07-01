@extends('master')


@section('title','Message')

@section('content')

<h1>post a content</h1>
<form action="/create" method="post">
    <input type="text" name="title" placeholder="title">
    <input type="text" name="content" placeholder="content">
    {{csrf_field()}}
    <button type="submit">submit</button>
</form>
Recent Messages:
<ul>

    @foreach($messages as $message)

    <li>{{ $message->title }} <br>
        {{ $message->content }}<br>
        {{ $message->created_at->diffforHumans() }}<br>
        <a href="/message/{{ $message->id }}">view</a>
    </li>

    @endforeach
</ul>
@endsection