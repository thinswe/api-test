@extends('home')

@section('content')
<form action="{{ route('categories.update',$category->id) }}" method="post">
    @method('put') 
    @csrf
    <div class="form-group">    
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" value="{{$category->name}}"/>
    </div>                  
    <button type="submit" class="btn btn-success">Update Category</button>
</form>
@endsection