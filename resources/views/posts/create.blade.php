@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Create Post</h1>
    </div><br>

    <div class="formcstm">
        {!! Form::open(['action' => 'PostsController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
            <div>
                {{Form::label('type', 'Post Type')}}
                {{Form::text('type', '', ['class'=>'form-control', 'placeholder'=>'Type of the Post'])}}
            </div><br><br>
            <div class="form-group">
                {{Form::label('image', 'Heading Image')}} <br>
                {{Form::file('cover_image')}}
            </div><br><br>
            <div>
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Title'])}}
            </div><br><br>
            <div>
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['class'=>'form-control my-editor areacstm', 'placeholder'=>'Body'])}}
            </div><br><br>
            <div>
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            </div>
        {!! Form::close() !!}
    </div>
@endsection

<style>
    h1{
        color: whitesmoke !important;
    }

    form label{
        color: aliceblue !important;
    }

    .formcstm{
        padding-left: 15%;
        padding-right: 15%;
    }

    .areacstm{
        height: 60%;
    }
</style>