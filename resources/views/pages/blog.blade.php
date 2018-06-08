@extends('layouts.cstmapp')

@section('content')
    @if(count($posts) > 0)
        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-6 cstm">
                        <div class="card">
                            <div class="hover01 column" style="width:100%">
                                <figure>
                                    <img src="storage/cover_images/{{$post->cover_image}}" style="width:100%">
                                </figure>
                            </div>
                            <a href="/blog/{{$post->id}}" role="button" style="text-decoration: none; color:black;">
                                <div class="card-body text-center">
                                    <h3>{!! $post->title !!}</h3><br>
                                    <small>Type : {{$post->type}}</small><br>
                                    <small>Created at {{$post->created_at}}</small>
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
    .cstm{
        margin-top: 50px;
    }

    img {
        width: 100%;
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
</style>

