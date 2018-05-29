@extends('layouts.cstmapp')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3>{{$post->title}}</h3><br>
                        <p>{!!$post->body!!}</p><br><br><br>
                        <small>Created at {{$post->created_at}}</small>
                    </div>
                </div>
            </div>
        </div>  
    </div><br><br><br>
    <div>
        @if(count($comments) > 0)
            @foreach($comments as $comment)
                <div class="container areacstm">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <h3>{{$comment->content}}</h3>
                                    <small>Comment by {{$comment->name}}</small><br>
                                    <small>Commented on {{$comment->created_at}}</small>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            @endforeach <br><br>
        @else
            <h3>No Post Found</h3>
        @endif
    </div><br><br>

    <div class="formcstm">
        {!! Form::open(['action' => 'CommentsController@store', 'method'=>'POST']) !!}
            <div>
                {{Form::label('name', 'Your Name')}}
                {{Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'Enter Your Name'])}}
            </div><br><br>
            <div>
                {{Form::label('content', 'Comment')}}
                {{Form::textarea('content', '', ['class'=>'form-control areacstm', 'placeholder'=>'Comment'])}}
            </div><br><br>
            <div>
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            </div>
        {!! Form::close() !!}
    </div>
@endsection

<style>
    html, body{
        background-image: url('img/background.png') !important;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .formcstm{
        padding-left: 30%;
        padding-right: 30%;
    }

    .areacstm{
        height: 20%;
    }
    </style>
