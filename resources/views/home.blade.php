@extends('master')


@section('title','Homepage')

@section('content')
<div>
    <h3>Post a Message</h3>
    <form action="/create" method="post">
      <input type="text" name="title" placeholder="Title" /><br />
      <textarea name="content" rows="5" cols="50" placeholder="content"></textarea><br />
      {{ csrf_field() }}
      <button type="submit">Submit</button>

    </form>
</div>

<div>
    <h3>Recent Messages</h3>
    <ul>
        @foreach($messages as $message)
          <li>
            {{ $message->title }} <br />
            {{ $message->content }}
            <br />
            <small>{{ $message->created_at->diffforHumans()}}</small>
            <br />
            <a href="/message/{{$message->id}}">View</a>
          </li>
        @endforeach
    </ul>
</div>
 
@endsection