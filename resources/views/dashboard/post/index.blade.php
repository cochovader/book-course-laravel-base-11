   
@extends('dashboard.master')

@section('content')

   <a href="{{route('post.create')}}">Create</a>
    
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Slug</th>
                <th>numero</th>
                <th>adress</th>
                <th>category</th>
                <th>description</th>
                <th>content</th>
                <th>image</th>
                <th>posted</th>
                <th>Opions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $p)
            <tr>
                <td>{{$p -> title}}</td>
                <td>{{$p -> slug}}</td>
                <td>{{$p -> numero}}</td>
                <td>{{$p -> adress}}</td>
                <td>{{$p -> category -> title}}</td>
                <td>{{$p -> description}}</td>
                <td>{{$p -> content}}</td>
                <td>{{$p -> image}}</td>
                <td>{{$p -> posted}}</td>
                <td>
                    <a href="{{route('post.edit', $p -> id)}}">Edit</a>
                    <a href="{{route('post.show', $p -> id)}}">Show</a>
                    <a href="{{route('post.update', $p -> id)}}">Update</a>
                    <form action="{{route('post.destroy', $p -> id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit">Delete</button>
                    </form>                     
                </td>
            </tr>
            @endforeach
        </tbody> 
    </table>

    {{ $posts->links() }}

@endsection

