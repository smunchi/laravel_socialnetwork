@extends('layouts.master')

@section('title')
    Welcome to social network
@endsection

@section('content')
<p style="color: #2F9306; font-size: 18px; text-indent: 50px;">Social networks helps to connect with people to expand your thoughts and share with other people near your area</p>
<div class="row">
    <div class="col-md-6">
        <h2 style="color:burlywood; font-weight: bold">Sign In</h2>
        <form action="{{ route('signin') }}" method='post'>           
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id='email' class="form-control"/>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id='password' name="password" class="form-control"/>
            </div>
            <input type="hidden" name='_token' value="{{ csrf_token() }}"/>
            <div class="form-group">                
                <input type="submit" class="btn btn-primary" name="signin" value="signin"/>
            </div>
        </form>
    </div>
    <div class="col-md-6">
        <h2 style="color:burlywood; font-weight: bold">Sign Up</h2>
        @include('includes.message-block')        
        <form action="{{route('signup')}}" method='post'>
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id='name' name="name" value="{{Request::old('name')}}" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="email">Your email</label>
                <input type="text" name="email" id='email' value="{{Request::old('email')}}" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" value="{{Request::old('password')}}" id='password' class="form-control"/>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            <div class="form-group">                
                <input type="submit" class="btn btn-primary" name="signup" value="sign up"/>
            </div>
        </form>
    </div>
</div>
@endsection