@extends('layouts.app')

@section('content')




    <!-- Intro -->

    <div class="intro">
        <div class="intro_content d-flex flex-row flex-wrap align-items-start justify-content-between">

            <!-- Intro Item -->

            <div class="intro_item" >
                <a href="{{route('event.show',['id' => 'Sport'])}}">
                <div class="intro_image"><img src="images/intro_1.jpg" alt=""></div>
                <div class="intro_body">
                    <div class="intro_title"><a href="#">Sport</a></div>
                    <div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
                </div>
            </a>
            </div>


            <!-- Intro Item -->
            <div class="intro_item">
                <a href="{{route('event.show',['id' => 'Technology'])}}">

                <div class="intro_image"><img src="images/intro_2.jpg" alt=""></div>
                <div class="intro_body">
                    <div class="intro_title"><a href="#">Technology</a></div>
                    <div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
                </div>
                </a>
            </div>

            <!-- Intro Item -->
            <div class="intro_item">
                <div class="intro_image"><img src="images/intro_3.jpg" alt=""></div>
                <div class="intro_body">
                    <div class="intro_title"><a href="#">Family</a></div>
                    <div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
                </div>
            </div>

            <!-- Intro Item -->
            <div class="intro_item">
                <div class="intro_image"><img src="images/intro_4.jpg" alt=""></div>
                <div class="intro_body">
                    <div class="intro_title"><a href="#">Kids</a></div>
                    <div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
                </div>
            </div>

            <!-- Intro Item -->
            <div class="intro_item">
                <div class="intro_image"><img src="images/intro_5.jpg" alt=""></div>
                <div class="intro_body">
                    <div class="intro_title"><a href="#">Education</a></div>
                    <div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
                </div>
            </div>

            <!-- Intro Item -->
            <div class="intro_item">
                <div class="intro_image"><img src="images/intro_6.jpg" alt=""></div>
                <div class="intro_body">
                    <div class="intro_title"><a href="#">Languages</a></div>
                    <div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
                </div>
            </div>

        </div>
    </div>

    <!--
     Calendar

        <div class="calendar">
            <div class="container reset_container">
                <div class="row">
                    <div class="col-xl-6 calendar_col">
                        <div class="calendar_container">
                            <div class="calendar_title_bar d-flex flex-row align-items-center justify-content-start">
                                <div><div class="calendar_icon"><img src="images/calendar.svg" alt=""></div></div>
                                <div class="calendar_title">22 april events calendar</div>
                            </div>
                            <div class="calendar_items">

                             Calendar Item
                                <div class="calendar_item d-flex flex-row align-items-center justify-content-start">
                                    <div><div class="calendar_item_image"><img src="images/event_1.jpg" alt=""></div></div>
                                    <div class="calendar_item_time">
                                        <div>14:00</div>
                                        <div>Auditorium</div>
                                    </div>
                                    <div class="calendar_item_text">
                                        <div>Business 101</div>
                                        <div>08 AM - 04 PM</div>
                                        <div>Speaker: Daniel Hill</div>
                                    </div>
                                </div>

                                 Calendar Item
                                <div class="calendar_item d-flex flex-row align-items-center justify-content-start">
                                    <div><div class="calendar_item_image"><img src="images/event_2.jpg" alt=""></div></div>
                                    <div class="calendar_item_time">
                                        <div>15:00</div>
                                        <div>Auditorium</div>
                                    </div>
                                    <div class="calendar_item_text">
                                        <div>About technology</div>
                                        <div>08 AM - 04 PM</div>
                                        <div>Speaker: Daniel Hill</div>
                                    </div>
                                </div>

                                 Calendar Item
                                <div class="calendar_item d-flex flex-row align-items-center justify-content-start">
                                    <div><div class="calendar_item_image"><img src="images/event_3.jpg" alt=""></div></div>
                                    <div class="calendar_item_time">
                                        <div>17:00</div>
                                        <div>Auditorium</div>
                                    </div>
                                    <div class="calendar_item_text">
                                        <div>Conference calls</div>
                                        <div>08 AM - 04 PM</div>
                                        <div>Speaker: Daniel Hill</div>
                                    </div>
                                </div>

                                Calendar Item
                                <div class="calendar_item d-flex flex-row align-items-center justify-content-start">
                                    <div><div class="calendar_item_image"><img src="images/event_4.jpg" alt=""></div></div>
                                    <div class="calendar_item_time">
                                        <div>20:00</div>
                                        <div>Auditorium</div>
                                    </div>
                                    <div class="calendar_item_text">
                                        <div>Drinks and dinner</div>
                                        <div>08 AM - 04 PM</div>
                                        <div>Speaker: Daniel Hill</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 calendar_col">
                        <div class="calendar_container">
                            <div class="calendar_title_bar d-flex flex-row align-items-center justify-content-start">
                                <div><div class="calendar_icon"><img src="images/calendar.svg" alt=""></div></div>
                                <div class="calendar_title">23 april events calendar</div>
                            </div>
                            <div class="calendar_items">

                                 Calendar Item
                                <div class="calendar_item d-flex flex-row align-items-center justify-content-start">
                                    <div><div class="calendar_item_image"><img src="images/event_5.jpg" alt=""></div></div>
                                    <div class="calendar_item_time">
                                        <div>14:00</div>
                                        <div>Auditorium</div>
                                    </div>
                                    <div class="calendar_item_text">
                                        <div>Business 101</div>
                                        <div>08 AM - 04 PM</div>
                                        <div>Speaker: Daniel Hill</div>
                                    </div>
                                </div>

                                 Calendar Item
                                <div class="calendar_item d-flex flex-row align-items-center justify-content-start">
                                    <div><div class="calendar_item_image"><img src="images/event_6.jpg" alt=""></div></div>
                                    <div class="calendar_item_time">
                                        <div>15:00</div>
                                        <div>Auditorium</div>
                                    </div>
                                    <div class="calendar_item_text">
                                        <div>About technology</div>
                                        <div>08 AM - 04 PM</div>
                                        <div>Speaker: Daniel Hill</div>
                                    </div>
                                </div>

                                 Calendar Item
                                <div class="calendar_item d-flex flex-row align-items-center justify-content-start">
                                    <div><div class="calendar_item_image"><img src="images/event_7.jpg" alt=""></div></div>
                                    <div class="calendar_item_time">
                                        <div>17:00</div>
                                        <div>Auditorium</div>
                                    </div>
                                    <div class="calendar_item_text">
                                        <div>Conference calls</div>
                                        <div>08 AM - 04 PM</div>
                                        <div>Speaker: Daniel Hill</div>
                                    </div>
                                </div>

                                Calendar Item
                                <div class="calendar_item d-flex flex-row align-items-center justify-content-start">
                                    <div><div class="calendar_item_image"><img src="images/event_8.jpg" alt=""></div></div>
                                    <div class="calendar_item_time">
                                        <div>20:00</div>
                                        <div>Auditorium</div>
                                    </div>
                                    <div class="calendar_item_text">
                                        <div>Drinks and dinner</div>
                                        <div>08 AM - 04 PM</div>
                                        <div>Speaker: Daniel Hill</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> -->

    <!-- Call to action -->





@endsection
