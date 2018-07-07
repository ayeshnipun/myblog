@extends('layouts.cstmapp')

@section('content')

    {{-- search post --}}
    {{-- <div class="content search-holder" style="z-index:10">
        <div class="row" style="min-width:330px;">
              
            <input type="text" class="form-control input-lg simplebox" id="search" name="search" style="background-color:transparent; border-bottom:thin; border-bottom-color:white !important; text-align:center; color:white; text-transform:uppercase; z-index:1; font-weight:300;" autofocus placeholder="SEARCH FOR POSTS" onclick="" autocomplete="off" />
              
        </div>
    </div> --}}
      
    <div class="container main" id="contain">
        @if(count($posts) > 0)
            <div class="column">
                @foreach($posts as $post)
                    <a href="/blog/{{$post->id}}" role="button" style="text-decoration: none; color:black;">
                        <div class="card mb-3">
                            <div class="hover01 column bot-crop">
                                <figure>
                                    <img class="card-img-top" src="/storage/cover_images/{{$post->cover_image}}" alt="Coverimage">
                                </figure>
                            </div>
                            <div class="card-body">
                                <h3>{!! $post->title !!}</h3>
                                <p><small>Type : {{$post->type}}</small>
                                <small class="float-right">Created on: {{ date('F d, Y', strtotime($post->created_at)) }}</small></p>
                            </div>
                        </div>
                    </a><br><br>
                @endforeach
                <br><br>
            </div>  
            {{ $posts->links() }}
        @else
            <h2 class="noPost">Sorry.. No post Found</h2>
        @endif
    </div>
@endsection

<style>
    .noPost{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .bot-crop{ 
        max-width:auto; 
        overflow: hidden; 
    }

    .bot-crop img{ 
        max-width: initial; /* Maybe optional. See note below */ 
    }

    .card{
        height: 400px;
        margin-bottom: 30px !important;
    }

    .card-img-top{
        height: auto;
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
        width: 80%;
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
	    width: 100%;
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

