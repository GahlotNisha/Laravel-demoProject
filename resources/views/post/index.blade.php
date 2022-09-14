@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if(session('status'))
                    <div class="alert alert-success" role="alert">
                        {{session('status')}}</div>
                @endif
                <div class="card">
                    <div class="card-header">Posts
                        <a href="{{url('posts/create')}}" class="btn btn-primary float-right"> Add Posts</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Id</td>
                                <td>Tilte</td>
                                <td>Description</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($post as $item)
                                <tr>

                                    <td>{{$item->id}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->description}}</td>
                                    <td><a href="{{url('posts/'.$item->id.'/edit')}}" class="btn btn-sm btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{url('posts/'.$item->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        @if(count($post) == 0)
                            <div class="card-header text-center">No Post yet.</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
