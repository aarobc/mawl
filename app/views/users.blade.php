
@extends('layout')

@section('content')
   @foreach($users as $user)
      <p>{{ $user->name }}</p>
    @endforeach
    {{ Form::open(array('route' => 'users', 'class' => 'navbar-form navbar-left')) }}
    <div class="form-group">
    <h4>Username:</h4>
    {{ Form::text('username', 'username', array('class' => 'form-control')) }}
    <h4>Password:</h4>
    {{ Form::text('password', 'password', array('class' => 'form-control')) }}
    <h4>Email</h4>
    {{ Form::text('email', 'email', array('class' => 'form-control')) }}
    {{ Form::submit('Add User', array('class' => 'btn btn-default')) }}
    </div>
    {{ Form::close() }}
 @stop
