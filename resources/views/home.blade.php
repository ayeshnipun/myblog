@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                        <br><br>
                    {{-- <input type="button" value="Add Post" class="btn btn-default" role="link"> --}}
                    <a href="/home/posts/create" role="button" class="btn btn-primary">Add Post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
   
</style>