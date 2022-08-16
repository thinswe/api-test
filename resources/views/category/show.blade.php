@extends('home')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between">
                <h2>Category</h2>  
            </div>  
            <table class="table table-striped">
                <thead>
                    <tr>
                    <td>ID</td>
                    <td>Name</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection