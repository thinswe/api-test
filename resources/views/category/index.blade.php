@extends('home')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between">
                <h2>Categories</h2>  
                <a href="{{route('categories.create')}}" class="btn btn-success mx-3 my-3">Create Category</a>
            </div>  
            <table class="table table-striped">
                <thead>
                    <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td colspan = 2>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{++$loop->index}}</td>
                        <td>{{$category->name}}</td>
                        <td>
                            <a href="{{ route('categories.edit',$category->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <a href="{{ route('categories.show',$category->id)}}" class="btn btn-primary">Show</a>
                        </td>
                        <td>
                            <form action="{{ route('categories.destroy', $category->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection