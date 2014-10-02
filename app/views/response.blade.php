@extends('master')

@section('content')
   <h2>Response</h2>
   
   <p>Thanks for stopping by, {{$name}}!</p>
   
   {{link_to('/', 'Go home')}}
   
@stop