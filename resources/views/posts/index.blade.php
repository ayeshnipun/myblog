@extends('layouts.app')

@section('content')
    <div class="col-md-8 welcomtxt">
        <h2>Welcome {{ Auth::user()->name }}</h2>
    </div>

    <div class="text-center">
        <h1 class="poststxt">POSTS</h1>
        <a role="button" href="/home/posts/create" class="btn btn-default"><i class="fa fa-plus"> </i> New Post</a><br><br>
    </div><br>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h3>{{$post->title}}</h3><br>
                                <small>Type : {{$post->type}}</small><br>
                                <small>Created at {{$post->created_at}}</small>
                                <div>
                                    <a href="/home/posts/{{$post->id}}" role="button" class="btn btn-primary">View</a>
                                    <a href="/home/posts/{{$post->id}}/edit" role="button" class="btn btn-primary">Edit</a>
                                    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'btnlocation']) !!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        @endforeach
    @else
        <h3>No Post Found</h3>
    @endif
@endsection

<style>
    .btn{
        background-color: aliceblue;
        color: black;
    }

    i{
        margin-right: 10px;
    }
    .welcomtxt{
        color: aliceblue;
    }

    .poststxt{
        color: aliceblue;
    }

    .btnlocation{
        position: relative;
        top: 10px;
    }

    .card{
        margin-bottom: 0.5cm !important;
    }
</style>