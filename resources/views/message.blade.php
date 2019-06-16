@extends('master')


@section('title',$message->title)

@section('content')
<div>
<h3>{{ $message->title }}</h3>
<p>{{ $message->content }}</p>

</div>
 
@endsection