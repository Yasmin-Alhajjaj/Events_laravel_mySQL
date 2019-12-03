@extends('layouts.app')

@section('content')

    <div class="intro">
        <div class="intro_content d-flex flex-row flex-wrap align-items-start justify-content-between">

        @foreach($event as $events)
            <!-- Intro Item -->
                <div class="intro_item" >
                <!-- {{--                    <a href="/{{$events->id}}/info">--}} -->
                    <a href="{{route('comment.show',['id' => $events->id])}}">

                        <div class="intro_image"><img src="{{asset('storage').'/'.$events->photo}}" alt=""></div>
                        <div class="intro_body">
                            <div class="intro_title"><a href="#">{{$events->name}}</a></div>
                            <div class="intro_subtitle">{{$events->description}}</div>
                            <div class="intro_subtitle">{{$events->location}}</div>

                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>


@endsection

