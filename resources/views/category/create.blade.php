@extends('home')

@section('content')
<form method="post" action="{{ route('categories.store') }}">
    @csrf
    <div class="form-group">    
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name"/>
    </div>                  
    <button type="submit" class="btn btn-success">Add Category</button>
</form>
@endsection