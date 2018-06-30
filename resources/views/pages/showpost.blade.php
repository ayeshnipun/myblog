@extends('layouts.cstmapp')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="postTitle text-center">{{$post->title}}</h3><br>
                        <div class="postBody">{!!$post->body!!}</div><br><br><br>
                        <small>Created on: {{ date('F d, Y', strtotime($post->created_at)) }}</small>
                    </div><br><br><br>
                    <!--comments display-->
                    <div class="card-body">
                        <h2 class="cmntText">Comments</h2><br>
                        @if(count($post->comment)>0)
                            @foreach($post->comment as $comment)
                                <div class="comment">
                                    <p class="cmtname">{{$comment->name}}</p>
                                    <p style="margin-left:30px;">{{$comment->content}}</p>
                                </div><br>
                            @endforeach
                        @else
                            <p>No Comments Yet</p>
                        @endif  
                    </div> 
                </div>
            </div>
        </div>
    </div><br><br><br>


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
    .comment{
        margin-left: 30px;
    }

    .cmtname{
        font-size: 22px;
        color: black;
        font-weight: 100;
    }

    .formcstm{
        padding-left: 30%;
        padding-right: 30%;
    }

    .areacstm{
        height: 20%;
    }

    .postTitle{
        margin-top: 20px;
        font-size: 40px;
        color: black;
    }

    .postBody{
        margin-top: 20px;
        font-size: 20px !important;
        color: black !important;
    }
</style>
