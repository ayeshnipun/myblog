@extends('layouts.cstmapp')

@section('content')

    {{-- search post --}}
    {{-- <div class="content search-holder" style="z-index:10">
        <div class="row" style="min-width:330px;">
              
            <input type="text" class="form-control input-lg simplebox" id="search" name="search" style="background-color:transparent; border-bottom:thin; border-bottom-color:white !important; text-align:center; color:white; text-transform:uppercase; z-index:1; font-weight:300;" autofocus placeholder="SEARCH FOR POSTS" onclick="" autocomplete="off" />
              
        </div>
    </div> --}}
      

    @if(count($posts) > 0)
        <div class="container main" id="contain">
            <div class="column">
                @foreach($posts as $post)
                    <div class="cstm">
                        <div class="card">
                            <div class="hover01 column" style="width:100%">
                                <figure>
                                    <img class="imgCstm" src="/storage/cover_images/{{$post->cover_image}}" style="width:100%">
                                </figure>
                            </div>
                            <a href="/blog/{{$post->id}}" role="button" style="text-decoration: none; color:black;">
                                <div class="card-body text-center">
                                    <h3>{!! $post->title !!}</h3><br>
                                    <small>Type : {{$post->type}}</small><br>
                                    <small>Created on: {{ date('F d, Y', strtotime($post->created_at)) }}</small>
                                    {{-- <small>Created at {{$post->created_at->toDayDateTimeString()}}</small> --}}
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach   
                <br><br>
            </div>
        </div>
    @else
        <h2>No post Found</h2>
    @endif
@endsection

<style>
    .card{
        height: 302px;
    }

    .card-body{
        margin-left: 500px;
    }

    .imgCstm{
        border-radius: 5px;
    }

    .search-holder {
        position: fixed;
        left: 50%;
        transform: translateX(-50%);
    }

    .main{
        padding: 16px;
        margin-top: 30px !important;
        height: 1500px;
    }

    .cstm{
        margin-top: 50px;
    }

    img {
        width: 90%;
        height: 300px;
    }
    .hover01 figure img {
	    -webkit-transform: scale(1);
	    transform: scale(1);
	    -webkit-transition: .3s ease-in-out;
	    transition: .1s ease-in-out;
    }

    .hover01 figure:hover img {
	    -webkit-transform: scale(1.3);
	    transform: scale(1.3);
    }

    .column {
    	    padding: 0;
    }

    figure {
	    width: 50%;
	    height: auto;
	    margin: 0;
	    padding: 0;
	    background: #fff;
	    overflow: hidden;
    }

    /* .cstmcont{
        padding: 10px;
    }

    .sticky + .cstmcont {
        padding-top: 16px;
    } */
</style>

