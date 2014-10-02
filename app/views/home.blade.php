@extends('master')

@section('content')
   <h2>Sample Laravel Application</h2>
   
   {{Form::open(array('url'=>'response'))}}
   {{Form::label('name', 'What is your name?')}}
   {{Form::text('name')}}
   <br />
   {{Form::submit('Say Hello')}}
   {{Form::close()}}
   
@stop