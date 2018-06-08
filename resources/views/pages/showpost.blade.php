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

    <!--comments display-->
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach($post->comment as $comment)
                <div class="comment">
                    <p>{{$comment->name}}</p>
                </div>
            @endforeach
        </div>
    </div>


    <div class="formcstm">
        {!! Form::open(['route' => ['comments.store', $post->id], 'method'=>'POST']) !!}
            <div>
                {{Form::label('name', 'Your Name')}}
                {{Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'Enter Your Name'])}}
            </div><br><br>
            <div>
                {{Form::label('email', 'E Mail')}}
                {{Form::text('email', '', ['class'=>'form-control', 'placeholder'=>'Enter Your E Mail'])}}
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
    .formcstm{
        padding-left: 30%;
        padding-right: 30%;
    }

    .areacstm{
        height: 20%;
    }

</style>
