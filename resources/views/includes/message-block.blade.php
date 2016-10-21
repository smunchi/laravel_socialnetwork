@if(count($errors)>0)               
    <ul>
        @foreach($errors->all() as $error)
        <li><span class="alert alert-warning">{{$error}}</span></li>
        @endforeach
    </ul>          
@endif

@if(Session::has('message'))
<div class="row">
    <div class="col-xs-6">
        <span class="alert alert-success">{{Session::get('message')}}</span>
    </div>
</div>
@endif