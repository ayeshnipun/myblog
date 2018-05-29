@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Edit Post</h1>
    </div><br>

    <div class="formcstm">
        {!! Form::open(['action' => ['PostsController@update', $post->id] , 'method'=>'POST']) !!}
            <div>
                {{Form::label('type', 'Post Type')}}
                {{Form::text('type', $post->title, ['class'=>'form-control', 'placeholder'=>'Type of the Post'])}}
            </div><br><br>
            <div>
                {{Form::label('title', 'Title')}}
                {{Form::text('title', $post->title, ['class'=>'form-control', 'placeholder'=>'Title'])}}
            </div><br><br>
            <div>
                {{Form::label('image', 'Heading Image')}} <br>
                {{Form::file('image')}}
            </div><br><br>
            <div>
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', $post->body, ['class'=>'form-control my-editor areacstm', 'placeholder'=>'Body'])}}
            </div><br><br>
            <div>
                {{Form::hidden('_method', 'PUT')}}
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            </div>
        {!! Form::close() !!}
    </div>
@endsection

<style>
    .formcstm{
        padding-left: 15%;
        padding-right: 15%;
    }

    .areacstm{
        height: 60%;
    }
</style>