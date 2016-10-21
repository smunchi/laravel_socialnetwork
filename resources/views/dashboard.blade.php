@extends('layouts.master')

@section('title')
    Hai, Thanks for login
@endsection

@section('content')


@include('includes.message-block')
<div class="row">
    <div class="col-md-6">
        <header><h3>What do you have to say?</h3></header>
        <form method="post" action="{{route('post.create')}}">
            <div class="form-group">
                <textarea class="form-control" name="body" cols="30" rows="4"></textarea>
            </div>
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <input type="submit" class="btn btn-primary"/>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <header><h3>What other people say...</h3></header>
        <article>
            <div>lorem ipsum</div>
            <div>posted by on</div>
            <div><a href="">like</a> <a href="">Dislike</a> <a href="">Edit</a></div>
            <hr/>
        </article>
        <article>
            <div>lorem ipsum</div>
            <div>posted by on</div>
            <div><a href="">like</a> <a href="">Dislike</a> <a href="">Edit</a></div>
            <hr/>
        </article>        
    </div>
</div>
@endsection