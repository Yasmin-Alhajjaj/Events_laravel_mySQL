@extends('layouts.app')

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-danger alert-info">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

{{-- <h1 style="color: black" >name:</h1>  <h4>{{$event->name}} </h4>--}}
{{--  <h1 style="color: black">location:</h1> <h4>{{$event->location}} </h4>--}}
{{-- <h1 style="color: black">description:</h1> <h4>{{$event->description}} </h4>--}}
{{-- <h1 style="color: black">photo: </h1>  <h4>{{$event->photo}} </h4>--}}

{{-- <h1 style="color: black">date: </h1>  <h4>{{$event->date}} </h4>--}}
{{-- <h1 style="color: black">price:</h1>  <h4>{{$event->price}} </h4>--}}

 <div class="card text-center">
     <div class="card-header">
         {{$event->name}}
     </div>
     <div class="card-body">
         <div class="intro_image"><img src={{$event->photo}} alt=""></div>


{{--         <h5 class="card-title">Special title treatment</h5>--}}
         <p class="card-text">{{$event->description}} </p>
         <p class="card-text">{{$event->location}} </p>
         <p class="card-text">{{$event->price}} </p>

         <a href="#" class="btn btn-primary">Booking</a>
     </div>

     <div class="card-text">
         date:

         {{$event->date}}
     </div>
{{--//////////////////////////////////////////////--}}

     <div class="card-footer text-muted">



         @foreach($comment as $comments)
         <p class="card-text text-left">{{$comments->description}} </p>

        @endforeach


     <form method="POST" action="{{route('comment.store') }}">
         @csrf
         <div class="form-group">
             <input type="text" name="description" class="form-control" placeholder="Add comment"/>
             <input type="hidden" name="event_id" value="{{ $event->id }}" />
         </div>
         <div class="form-group">
             <input type="submit" class="btn btn-warning" value="Add Comment" />
         </div>
     </form>

     </div>
 </div>



{{--<script>--}}
{{--    let msg = '{{Session::get('alert')}}';--}}
{{--    let exist = '{{Session::has('alert')}}';--}}
{{--    if(exist){--}}
{{--        alert(msg);--}}
{{--    }--}}
{{--</script>--}}






@endsection
