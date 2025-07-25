   
@extends('dashboard.master')

@section('content')

   <a href="{{route('category.create')}}">Create</a>
    
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Options</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $c)
            <tr>
                <td>{{$c -> id}}</td>
                <td>{{$c -> title}}</td>
                
                <td>
                    <a href="{{route('category.edit', $c -> id)}}">Edit</a>
                    <a href="{{route('category.show', $c -> id)}}">Show</a>
                    <a href="{{route('category.update', $c -> id)}}">Update</a>
                    <form action="{{route('category.destroy', $c -> id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit">Delete</button>
                    </form>                     
                </td>
            </tr>
            @endforeach
        </tbody> 
    </table>

    {{ $categories->links() }}

@endsection

