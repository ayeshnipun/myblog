@extends('layouts.cstmapp')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="postTitle text-center">{{$post->title}}</h3><br>
                        <div class="postBody">{!!$post->body!!}</div><br><br>
                        <small>Created on: {{ date('F d, Y', strtotime($post->created_at)) }}</small>
                    </div><br><br><br><br>
                    <div class="social-share col-md-12">
                        <br>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}" target="_blank" role="button" class="btn btn-default shareBtn" title="Share on Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}" target="_blank" role="button" class="btn btn-default shareBtn" title="Share on Twitter"><i class="fa fa-twitter"></i></a>
                    </div>
                    <!--comments display-->
                    <div class="card-body">
                        <br>
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
                {{Form::button('<i class="fa fa-comment"></i> Submit', ['class'=>'btn btn-default btncmnt', 'type'=>'submit'])}}
            </div>
        {!! Form::close() !!}
    </div>
@endsection

<style>
    .btncmnt:hover{
        background-color: aqua;
    }

    .shareBtn{
        background-color: #e0e0d1;
        color: #2e2e1f;
    }

    .shareBtn:hover{
        background-color: blue;
        color: white;
    }

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

<script>
    var popupMeta = {
    width: 400,
    height: 400
}
$(document).on('click', '.social-share', function(event){
    event.preventDefault();

    var vPosition = Math.floor(($(window).width() - popupMeta.width) / 2),
        hPosition = Math.floor(($(window).height() - popupMeta.height) / 2);

    var url = $(this).attr('href');
    var popup = window.open(url, 'Social Share',
        'width='+popupMeta.width+',height='+popupMeta.height+
        ',left='+vpPsition+',top='+hPosition+
        ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

    if (popup) {
        popup.focus();
        return false;
    }
});
</script>