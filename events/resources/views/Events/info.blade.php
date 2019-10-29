@extends('layouts.app')

@section('content')

 <h1 style="color: black" >name:</h1>  <h4>{{$event->name}} </h4>
  <h1 style="color: black">location:</h1> <h4>{{$event->location}} </h4>
 <h1 style="color: black">description:</h1> <h4>{{$event->description}} </h4>
 <h1 style="color: black">photo: </h1>  <h4>{{$event->photo}} </h4>

 <h1 style="color: black">date: </h1>  <h4>{{$event->date}} </h4>
 <h1 style="color: black">price:</h1>  <h4>{{$event->price}} </h4>


@endsection
