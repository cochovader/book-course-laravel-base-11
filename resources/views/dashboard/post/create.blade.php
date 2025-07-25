   
@extends('dashboard.master')

@section('content')
    
    @include('dashboard.fragment._errors-form')

    <form action="{{route ('post.store')}}" method="post">

        @include('dashboard.post._form')
     
        {{-- <label for=""> Title </label>
        <input type="text" name="title">
        
        <label for=""> Slug </label>
        <input type="text" name="slug">

        <label for=""> numero </label>
        <textarea name="numero"></textarea>

        <label for=""> adress </label>
        <textarea name="adress"></textarea>

        <label for="">Category</label>
        <select name="category_id"></textarea>
            @foreach ($categories as $title => $id)
                <option value= "{{ $id }}"> {{$title}}</option>
            @endforeach
        </select>

        <label for=""> description </label>
        <textarea name="description"></textarea>

        <label for=""> content </label>
        <textarea name="content"></textarea>

        <label for=""> image </label>
        <textarea name="image"></textarea>

        <label for=""> posted </label>
        <select name="posted">
            <option value="yes"> Yes</option>
            <option value="not"> Not</option>
        </select>        
        
        <button type="submit">Send</button> --}}
    </form>
@endsection

