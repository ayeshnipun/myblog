@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <h2 class="cmntwlcmtxt">Welcome {{ Auth::user()->name }}</h2>
    </div>
    <div>
        <h1 class="row cmnttxt justify-content-center">COMMENTS</h1>
    </div>
    <br>
    @if(count($comments) > 0)
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @foreach($comments as $comment)
                        <div class="card">
                            <div class="card-body">
                                <h3>{{$comment->content}}</h3><br>
                                <small>Atricle - </small><br>
                                <small>Comment by {!! $comment->name !!}</small><br>
                                <small>Commented on {!! $comment->created_at !!}</small>
                            </div>
                        </div><br><br>
                    @endforeach
                </div>
            </div>  
        </div>   
    @else
        <h3>No Post Found</h3>
    @endif
@endsection

<style>
    .cmnttxt{
        color: aliceblue;
    }

    .cmntwlcmtxt{
        color: aliceblue;
    }

    .custom{
        padding-top: 10px !important;
        padding-bottom: 10px !important;
        padding-left: 1cm !important;
    }
</style>