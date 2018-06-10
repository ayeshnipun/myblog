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
                    </div><br><br><br>
                    <!--comments display-->
                    <div class="card-body">
                        <h2>Comments</h2><br>
                        @if(count($post->comment)>0)
                            @foreach($post->comment as $comment)
                                <div class="comment">
                                    <p class="cmtname">{{$comment->name}}</p>
                                    <p style="margin-left:30px;">{{$comment->content}}</p>
                                </div>
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
    .cmtname{
        font-size: 24px;
        font-weight: 100;
    }

    .formcstm{
        padding-left: 30%;
        padding-right: 30%;
    }

    .areacstm{
        height: 20%;
    }

</style>
