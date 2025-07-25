@extends('dashboard.master')

@section('content')
    
    <h1> {{$post -> title}} </h1> 
    <p>{{$post -> slug}}</p>
    <p>{{$post -> numero}}</p>
    <p>{{$post -> adress}}</p>
    <p>{{$post -> category -> title}}</p>
    <p>{{$post -> description}}</p>
    <p>{{$post -> content}}</p>
    <img src="/uploads/posts/{{$post -> image }}" style="width:250px" alt="{{$post -> title}}">
    <p>{{$post -> image}} </p>
    <p>{{$post -> posted}}</p>

  
@endsection

