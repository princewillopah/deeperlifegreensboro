@extends('layouts.template')
{{--$ = 'About';--}}
{{--$page ="about";--}}
@section('title')
    Home
@endsection
@section('content')

    <div class="container-fluid" >
        <div class="mycourasel">
            <div id="myCarouselIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarouselIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarouselIndicators" data-slide-to="1"></li>
                    <li data-target="#myCarouselIndicators" data-slide-to="2"></li>
                    <li data-target="#myCarouselIndicators" data-slide-to="3"></li>
                    <li data-target="#myCarouselIndicators" data-slide-to="4"></li>
                    <li data-target="#myCarouselIndicators" data-slide-to="5"></li>
                    <li data-target="#myCarouselIndicators" data-slide-to="6"></li>
                    <li data-target="#myCarouselIndicators" data-slide-to="7"></li>
                    <li data-target="#myCarouselIndicators" data-slide-to="8"></li>
                    <li data-target="#myCarouselIndicators" data-slide-to="9"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="img-container">
                            <img class="d-block w-100 " src="img/home/slide/1.jpg" alt="Storage / Handling / Shipping">
                        </div>
                        <div class="carousel-caption carousel-caption-1 d-none d-md-block">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="caption animated fadeInRight" id="caption1" data-animation="fadeInRight" data-delay="300ms" style="animation-delay: 300ms">
                                        <div class="caption-inner">
                                            <h1 class="text-center cssanimation leFadeInLeft sequence">Welcome To Greensboro Church</h1>
                                            <p class=" wow fadeInUp"  data-wow-delay="2s" data-wow-duration="2s">Where believers worship in truth and spirit...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="courasel-overlay"> </div>
                    </div>

                    <div class="carousel-item">
                        <div class="img-container">
                            <img class="d-block w-100" src="img/home/slide/2.jpg" alt="Train Transpotation" >
                        </div>
                        <div class="carousel-caption carousel-caption-3 d-none d-md-block">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="caption animated fadeInRight" id="caption2" data-animation="fadeInRight" data-delay="300ms" style="animation-delay: 300ms">
                                        <div class="caption-inner">
                                            <h3 class="pb-1 animated fadeInLeft" id="caption-title2" data-animation="fadeInLeft" data-delay="500ms" style="animation-delay: 500ms" >Train Transpotation</h3>
                                            <p class="animated fadeInRight" id="caption-para2" data-animation="fadeInRight" data-delay="700ms" style="animation-delay: 700ms">Safe, efficient and good for the environment
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="courasel-overlay"> </div>
                    </div>
                    <div class="carousel-item">
                        <div class="img-container">
                            <img class="d-block w-100" src="img/home/slide/3.jpg" alt="TANK STORAGE MINERALS" >
                        </div>
                        <div class="carousel-caption carousel-caption-4 d-none d-md-block">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="caption animated fadeInLeft" id="caption4" data-animation="fadeInUp" data-delay="300ms" style="animation-delay: 300ms">
                                        <div class="caption-inner">
                                            <h3 class="pb-1 animated fadeInRight" id="caption-title4" data-animation="fadeInRight" data-delay="500ms" style="animation-delay: 500ms" >Tank Storage Minerals</h3>
                                            <p class="animated fadeInLeft" id="caption-para4" data-animation="fadeInLeft" data-delay="700ms" style="animation-delay: 700ms">Blending, heating, pumpoversclient,board-board, fully dedicated systems for each customers
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="courasel-overlay"> </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="img-container">
                            <img class="d-block w-100" src="img/home/slide/4.jpg" alt="Road Transpotation" >
                        </div>
                        <div class="carousel-caption carousel-caption-1 d-none d-md-block">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="caption animated fadeInRight" id="caption1" data-animation="fadeInRight" data-delay="300ms" style="animation-delay: 300ms">
                                        <div class="caption-inner">
                                            <h3 class="pb-1 animated fadeInLeft" id="caption-title2" data-animation="fadeInLeft" data-delay="500ms" style="animation-delay: 500ms" >Road Transpotation</h3>
                                            <p class="animated fadeInRight" id="caption-para2" data-animation="fadeInRight" data-delay="700ms" style="animation-delay: 700ms">Deliveries are made safely and on time at any given place
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="courasel-overlay"> </div>
                    </div>
                    <div class="carousel-item">
                        <div class="img-container">
                            <img class="d-block w-100" src="img/home/slide/5.jpg" alt="MILLIONS OF LITRES OF STORAGE CAPACITY" >
                        </div>
                        <div class="carousel-caption carousel-caption-3 d-none d-md-block">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="caption animated fadeInRight" id="caption2" data-animation="fadeInRight" data-delay="300ms" style="animation-delay: 300ms">
                                        <div class="caption-inner">
                                            <h3 class="pb-1 animated fadeInLeft" id="caption-title2" data-animation="fadeInLeft" data-delay="500ms" style="animation-delay: 500ms" >Millions Of Litres Of Storage Capacity</h3>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="courasel-overlay"> </div>
                    </div>
                    <div class="carousel-item">
                        <div class="img-container">
                            <img class="d-block w-100" src="img/home/slide/6.jpg" alt="INLINE SHIPPING" >
                        </div>
                        <div class="carousel-caption carousel-caption-4 d-none d-md-block">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="caption animated fadeInLeft" id="caption4" data-animation="fadeInUp" data-delay="300ms" style="animation-delay: 300ms">
                                        <div class="caption-inner">
                                            <h3 class="pb-1 animated fadeInRight" id="caption-title4" data-animation="fadeInRight" data-delay="500ms" style="animation-delay: 500ms" >Inline Shipping</h3>
                                            <p class="animated fadeInLeft" id="caption-para4" data-animation="fadeInLeft" data-delay="700ms" style="animation-delay: 700ms">wilsco has 12 berges ranging from 650 to 4,050 tonnes for inland shipping
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="courasel-overlay"> </div>
                    </div>
                    <div class="carousel-item">
                        <div class="img-container">
                            <img class="d-block w-100" src="img/home/slide/7.jpg" alt="QUALITY CONTROL" >
                        </div>
                        <div class="carousel-caption carousel-caption-3 d-none d-md-block">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="caption animated fadeInRight" id="caption2" data-animation="fadeInRight" data-delay="300ms" style="animation-delay: 300ms">
                                        <div class="caption-inner">
                                            <h3 class="pb-1 animated fadeInLeft" id="caption-title2" data-animation="fadeInLeft" data-delay="500ms" style="animation-delay: 500ms" >Quality Control</h3>
                                            <p class="animated fadeInRight" id="caption-para2" data-animation="fadeInRight" data-delay="700ms" style="animation-delay: 700ms">We take quality control with seriousness
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="courasel-overlay"> </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="img-container">
                            <img class="d-block w-100" src="img/home/slide/8.jpg" alt="Passion for Performance with Integrity" >
                        </div>
                        <div class="carousel-caption carousel-caption-5 d-none d-md-block">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="caption animated fadeInLeft" id="caption4" data-animation="fadeInUp" data-delay="300ms" style="animation-delay: 300ms">
                                        <div class="caption-inner">
                                            <h3 class="pb-1 animated fadeInRight" id="caption-title4" data-animation="fadeInRight" data-delay="500ms" style="animation-delay: 500ms" >Passion For Performance With Integrity</h3>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="courasel-overlay"> </div>
                    </div>
                    <div class="carousel-item">
                        <div class="img-container">
                            <img class="d-block w-100" src="img/home/slide/9.jpg" alt="QUALITY CONTROL" >
                        </div>
                        <div class="carousel-caption carousel-caption-3 d-none d-md-block">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="caption animated fadeInRight" id="caption2" data-animation="fadeInRight" data-delay="300ms" style="animation-delay: 300ms">
                                        <div class="caption-inner">
                                            <h3 class="pb-1 animated fadeInLeft" id="caption-title2" data-animation="fadeInLeft" data-delay="500ms" style="animation-delay: 500ms" >Quality Control</h3>
                                            <p class="animated fadeInRight" id="caption-para2" data-animation="fadeInRight" data-delay="700ms" style="animation-delay: 700ms">We take quality control with seriousness
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="courasel-overlay"> </div>
                    </div>

                </div> <!--<carousel-inner-->
                <a class="carousel-control-prev " href="#myCarouselIndicators" role="button" data-slide="prev">
                    <!--<span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next " href="#myCarouselIndicators" role="button" data-slide="next">
                    <!--<span class="carousel-control-next-icon" aria-hidden="true"></span>-->
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!--         <div class="courasel-overlay"> </div>-->
        </div><!-- /.mycourasel -->
    </div>
    <!-- ======================== subscription ======================================= -->
    <section class="sunday-message">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="subscription-text">
                        <h3>
                            <!--                             Watch us live every Sunday | 10:30 AM-->

                            <span class="typewrite endwords" data-period="2000" data-type="[ &quot;Watch us live every Sunday | 10:30 AM &quot; , &quot;Bible Study every Wednesday | 7:00pm&quot;, &quot;Faith Clinic every Friday | 7:00pm&quot;]"><span style="color: white">Watch us live every Sunday | 10:30 AM </span></span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================== welcome ======================================= -->
    <section class="welcome">
        <div class="container">
            <div class="row">
                <div class="col-12  col-sm-6 col-md-6">
                    <div class="img-border">
                        <video width="100%" height="100%" controls autoplay>
                            <source src="img/home/mov_bbb.mp4" type="video/mp4">
                            <source src="img/home/mov_bbb.ogg" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="col-12  col-sm-6 col-md-6">
                    <div class="welcome-msg">
                        <p class="light" >Welcome Message</p>
                        <h2>Welcome to Faithful</h2>
                        <p class="pst">by Ptr. Johnson</p>
                        <p class="topic">If ye love Me, keep My Commandments</p>
                        <p class="msg">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Alias aliquam asperiores aspernatur, cum cupiditate ea
                            incidunt itaque perspiciatis quod,
                            reprehenderit unde, vero voluptatibus voluptatum.
                            Adipisci consectetur cumque nemo obcaecati pariatur.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================== become-a-member ======================================= -->
    <section class="become-a-member">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="become-a-member-cover">
                        <h6>A Place For You</h6>
                        <h2>Find a place to connect and grow through a small group, class, or regular gathering.</h2>
                        <a href="" class="btn btn-primary">BECOME A MEMBER</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================== latest sermons ======================================= -->
    <section class="latest-sermons">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-sermons-content">
                        <h2 class="section-heading">Latest Sermons</h2>
                        <p class="paragraph">A church isn't a building—it's the people. We meet in locations around the United States
                            and globally at Life.Church Online. No matter where you join us.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
{{-- <img class="w-100 h-100 rounded" src="{{asset('uploads/events/'.$slide1->image)}}" alt="{{$slide1->title}} here "> --}}
            @foreach($sermons as $sermon)

            <div class="col-12 col-md-6 col-lg-4">
                <div class="latest-sermons-card">
                    <div class="card" >
                        <div class="latest-sermons-img-date">
                            {{-- <img class="card-img-top" src="img/home/3.jpg" alt="Card image" style="width:100%"> --}}
                            <div class="latest-sermons-img" style="height: 220px;overflow: hidden;">
                                 <img class=" rounded" style="width:100% ;height: 100%; " src="{{asset('uploads/sermons/'.$sermon->coverImage)}}" alt="{{$sermon->coverImage}} here ">
                            </div>
                           
                            <div class="latest-sermons-date">
                                <h6>
                                    {{-- <span>10</span>MAR --}} 
                                      <span> {{$sermon->sermonDate->format('d')}}</span> {{$sermon->sermonDate->format('M')}}
                               
                                </h6>
                            </div>
                        </div>

                        <div class="card-body">
                            <h4 class="card-title">{{$sermon->title}}</h4>
                            <div class="latest-sermons-card-detail">
                                <p><i class="fa fa-user" aria-hidden="true"></i> <span class="name-title">Sermon From: </span><span class="name">{{$sermon->pastor->name}}</span>
                                </p>
                                <p><i class="fa fa-tag" aria-hidden="true"></i> <span class="name-title">Categories: </span><span class="name"> {{$sermon->category->name}}</span>
                                </p>
                                <p><i class="fa fa-clock-o" aria-hidden="true"></i> <span class="name-title"> {{$sermon->sermonDate->format('M')}}  {{$sermon->sermonDate->format('d')}}</span> by </span><span class="name"> {{date('G:i a',strtotime($sermon->startTime))}} - {{date('G:i a',strtotime($sermon->endTime))}}</span>
                                </p>
                            </div> 
                            <div class="entry-action">

                                <a href="{{$sermon->vidioLink}}" target="_blank"><i class="licon-camera-play"></i></a>
                                <a href="{{$sermon->audioLink}}"  target="_blank"><i class="licon-headphones"></i></a>
                                <a href="{{$sermon->vidioLink}}"  target="_blank"><i class="licon-enter-down2"></i></a>
                                {{-- <a href="#"><i class="licon-file-empty"></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </section>
    <!-- ======================== events ======================================= -->
    <section class="events">
        <div class="events-containers">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="events-banner">
                            <h2>Upcoming Events.</h2>
                            <h6>Be sure to visit our Upcoming Events page regularly to get information</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pb-4">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <!-- <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul> -->
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="events-container">
                            @foreach ($slide1_event as $slide1)
                            <div class="event">
                                    <div class="row">
                                            <div class="col-md-3">
                                                
                                                <img class="w-100 h-100 rounded" style="width: 100%; height: 180px" src="{{asset('uploads/events/'.$slide1->image)}}" alt="{{$slide1->title}} here ">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="events-text">
                                                    <h4>{{ucfirst($slide1->title)}}</h4>
                                                </div>
                                                <div class="event-meta">
                                                    <a href=""><i class="fa fa-calendar" aria-hidden="true"></i>  {{date_format($slide1->eventStartDate,'F d, Y')  }}</a>
                                                    <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>  {{$slide1->eventStartDate->format('H:i a')}} - {{$slide1->eventEndDate->format('H:i a')}}</a>
                                                    <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> {{ucfirst($slide1->place)}}</a>
                                                </div>
                                                <p>
                                                    {!! Str::limit($slide1->description, 300, ' ...') !!}
                                                </p>
                                            
                                            </div>
                                            <div class="col-md-3 bn">
                                              <a class="btn" href="{{route('single-event',$slide1->slug)}}">FIND OUT MORE</a>
                                            </div> 
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="events-container">
                                @foreach ($slide2_event as $slide2)
                                <div class="event">
                                        <div class="row">
                                                <div class="col-md-3">
                                                    
                                                    <img class="w-100 rounded"  style="width: 100%; height: 180px" src="{{asset('uploads/events/'.$slide2->image)}}" alt="{{$slide2->title}} here ">
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="events-text">
                                                        <h4>{{ucfirst($slide2->title)}}</h4>
                                                    </div>
                                                    <div class="event-meta">
                                                        <a href=""><i class="fa fa-calendar" aria-hidden="true"></i>  {{date_format($slide2->eventStartDate,'F d, Y')  }}</a>
                                                        <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>  {{$slide2->eventStartDate->format('H:i a')}} - {{$slide2->eventEndDate->format('H:i a')}}</a>
                                                        <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> {{ucfirst($slide2->place)}}</a>
                                                    </div>
                                                    <p>
                                                        {!! Str::limit($slide2->description, 300, ' ...') !!}
                                                    </p>
                                                
                                                </div>
                                                <div class="col-md-3 bn">
                                                  <a class="btn" href="{{route('single-event',$slide2->slug)}}">FIND OUT MORE</a>
                                                </div> 
                                        </div>
                                    </div>
                                @endforeach
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="events-container">
                                @foreach ($slide3_event as $slide3)
                                <div class="event">
                                        <div class="row">
                                                <div class="col-md-3">
                                                    
                                                    <img class="w-100  rounded"  style="width: 100%; height: 180px" src="{{asset('uploads/events/'.$slide3->image)}}" alt="{{$slide3->title}} here ">
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="events-text">
                                                        <h4>{{ucfirst($slide3->title)}}</h4>
                                                    </div>
                                                    <div class="event-meta">
                                                        <a href=""><i class="fa fa-calendar" aria-hidden="true"></i>  {{date_format($slide3->eventStartDate,'F d, Y')  }}</a>
                                                        <a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>  {{$slide3->eventStartDate->format('H:i a')}} - {{$slide3->eventEndDate->format('H:i a')}}</a>
                                                        <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> {{ucfirst($slide3->place)}}</a>
                                                    </div>
                                                    <p>
                                                        {!! Str::limit($slide3->description, 300, ' ...') !!}
                                                    </p>
                                                
                                                </div>
                                                <div class="col-md-3 bn">
                                                  <a class="btn" href="{{route('single-event',$slide3->slug)}}">FIND OUT MORE</a>
                                                </div> 
                                        </div>
                                    </div>
                                @endforeach
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="fa fa-angle-left" ></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="fa fa-angle-right"></span>
                </a>

            </div>


        </div>
    </section>
    <!-- ======================== subscription ======================================= -->
    <section class="subscription">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="subscription-text">
                        <h3>Subscribe To Our Newsletter</h3>
                        <h6>Subcribe Us And Tell Us About Your Story</h6>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="subscription-form">
                        <input type="email" name="subscribe-email" id="subscribeEmail" placeholder="Your Email">
                        <button type="submit" class="btn crose-btn">subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection