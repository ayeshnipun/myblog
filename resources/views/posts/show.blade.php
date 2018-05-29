@extends('layouts.app')

@section('content')
    <br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body">
                            <h3>{{$post->title}}</h3><br>
                            <p>{!! $post->body !!}</p>
                            <p>Type : {{$post->type}}</p>
                            <p>Created at {{$post->created_at}}</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
@endsection