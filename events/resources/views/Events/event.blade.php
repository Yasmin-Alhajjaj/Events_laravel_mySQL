@extends('layouts.app')

@section('content')

    @foreach($event as $events)
    <div class="intro">
        <div class="intro_content d-flex flex-row flex-wrap align-items-start justify-content-between">

            <!-- Intro Item -->

            <div class="intro_item" >
                <a href="/{{$events->id}}/info">
                    <div class="intro_image"><img src="images/intro_1.jpg" alt=""></div>
                    <div class="intro_body">
                        <div class="intro_title"><a href="#">{{$events->name}}</a></div>
                        <div class="intro_subtitle">{{$events->description}}</div>
                    </div>
                </a>
            </div>

@endforeach

@endsection
