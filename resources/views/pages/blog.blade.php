@extends('layouts.cstmapp')

@section('content')
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <a href="/blog/{{$post->id}}" role="button" style="text-decoration: none; color:black;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-body">
                                    <h3>{!! $post->title !!}</h3><br>
                                    <small>Type : {{$post->type}}</small><br>
                                    <small>Created at {{$post->created_at}}</small>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div><br><br>
            </a>
        @endforeach
    @else
        <h2>No post Fund</h2>
    @endif
@endsection
