@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <h2>Welcome {{ Auth::user()->name }}</h2>
    </div>
    <h1 class="row justify-content-center">COMMENTS</h1><br>
    @if(count($comments) > 0)
        @foreach($comments as $comment)
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h3>{{$comment->content}}</h3><br>
                                <small>Atricle - {{$comment->name}}</small><br>
                                <small>Comment by {{$comment->name}}</small><br>
                                <small>Commented on {{$comment->created_at}}</small>
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
    .custom{
        padding-top: 10px !important;
        padding-bottom: 10px !important;
        padding-left: 1cm !important;
    }
</style>