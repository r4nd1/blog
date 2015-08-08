@extends('users.layouts')
@section('main')
<h1>Create User</h1>
 {!! Form::open(array('route' => 'users.store')) !!}
<ul>
<div class="form-group">
 {!! Form::label('name', 'Name:') !!}
 {!! Form::text('name') !!}
</div>
<div class="form-group">
 {!! Form::label('username', 'Username:') !!}
 {!! Form::text('username') !!}
</div>
<div class="form-group">
 {!! Form::label('password', 'Password:') !!}
 {!! Form::password('password') !!}
</div>
<div class="form-group">
 {!! Form::label('password', 'Confirm Password:') !!}
 {!! Form::password('password_confirmation') !!}
</div>
<div class="form-group">
 {!! Form::label('email', 'Email:') !!}
 {!! Form::text('email') !!}
</div>
<div class="form-group">
 {!! Form::label('phone', 'Phone:') !!}
 {!! Form::text('phone') !!}
</div>
<div class="form-group">
 {!! Form::submit('Submit', array('class' => 'btn')) !!}
</div>
</ul>
 {!! Form::close() !!}
@if ($errors->any())
<ul>
 {!! implode('', $errors->all('<li class="error">:message</
li>')) !!}
</ul>
@endif
@stop