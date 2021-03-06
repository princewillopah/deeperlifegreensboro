@extends('layouts.template')

@section('title')
    Women Ministry
@endsection

@section('content')

    <section id="women-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="contents">
                        <div class="contents-message">
                            <h1 class="wow fadeInUp" data-wow-duration="2s">Women</h1>
                            <div class="wow fadeInUp" data-wow-delay="1s" data-wow-duration="3s">
                             <span  class="wow fadeInUp navs" data-wow-delay="2s" data-wow-duration="3s">
                                      <a  href="{{route('homepage')}}">Home  </a> > Ministries - Women</span></div>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section ><!-- /.about -->

    <section id="ministry-main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="info">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="menu">
                                    <nav class="nav flex-column">
                                        <a class="nav-link" href="{{route('children')}}">Children Ministry</a>
                                        <a class="nav-link" href="{{route('youth')}}">Youth Ministry</a>
                                        <a class="nav-link active" href="{{route('women')}}">Women Ministry</a>
                                        <a class="nav-link " href="{{route('men')}}">Men Ministry</a>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="main">
                                    <div class="main-pic">
                                        <img src="{{asset('img/ministry/women/image_6.jpg')}}" class="img-fluid" alt="">
{{--                                        <img src="{{asset('img/generics/logo-light.png')}}" class="" alt="">--}}
                                    </div>
                                    <div class="main-writeup">
                                        <h3>Women, be subissive to you husbands</h3>
                                        <p>Lorem ipsum dolor sit amet,  amet, consectetur adipisicing elit. Aliquam aliquid minima minus natus
                                            ullam vero voluptate voluptatem? Ab aspernatur commodi eius in ipsa ipsum maxime
                                            nostrum quod, repellat, soluta voluptatem.consectetur adipisicing elit. Aliquam aliquid minima minus natus
                                            ullam vero voluptate voluptatem? Ab aspernatur commodi eius in ipsa ipsum maxime
                                            nostrum quod, repellat, soluta voluptatem.
                                        </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid minima minus natus
                                            ullam vero voluptate voluptatem? Ab aspernatur commodi eius in ipsa ipsum maxime
                                            nostrum quod, repellat, soluta voluptatem. amet, consectetur adipisicing elit. Aliquam aliquid minima minus natus
                                            ullam vero voluptate voluptatem? Ab aspernatur commodi eius in ipsa ipsum maxime
                                            nostrum quod, repellat, soluta voluptatem.
                                        </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid minima minus natus
                                            ullam vero voluptate voluptatem? Ab aspernatur commodi eius in ipsa ipsum maxime
                                            nostrum quod, repellat, soluta voluptatem.
                                        </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid minima minus natus
                                            ullam vero voluptate voluptatem? Ab aspernatur commodi eius in ipsa ipsum maxime
                                            nostrum quod, repellat, soluta voluptatem.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="ministry-teacher">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1> Leaders for Women ministry</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src= "{{asset('img/ministry/women/person_1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Faith F. Johnson</h5>
                            <span>Head of Women Ministry</span>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="socials">
                            <nav class="nav justify-content-center">
                                <a href="" class="nav-link facebook" ><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" class="nav-link twitter" ><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" class="nav-link instagram"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">

                        <img src="{{asset('img/ministry/women/person_4.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Maria F. Johnson</h5>
                            <span>Women Dedication Officer</span>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="socials">
                            <nav class="nav justify-content-center">
                                <a href="" class="nav-link facebook" ><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" class="nav-link twitter" ><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" class="nav-link instagram"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src= "{{asset('img/ministry/women/person_7.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Beyounce Drake</h5>
                            <span>Secretary</span>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="socials">
                            <nav class="nav justify-content-center">
                                <a href="" class="nav-link facebook" ><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" class="nav-link twitter" ><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" class="nav-link instagram"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="recent-sermons">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="recent-sermon-header">
                        <h3>Women Ministry Sermons</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sermon">
                        <div class="sermon-text">
                            <h2><a href="#">Be supportive</a></h2>
                            <p class="sermon-meta">by <a href="#">Luis Matthew</a> on March 28, 2018</p>
                        </div>
                        <div class="player">
                            <audio id="player2" preload="none" controls="" style="max-width: 100%">

                                <source src= "{{asset('http://www.largesound.com/ashborytour/sound/AshboryBYU.mp3')}}" type="audio/mp3">
                            </audio>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sermon">
                        <div class="sermon-text">
                            <h2><a href="#">Always Pray for your husband</a></h2>
                            <p class="sermon-meta">by <a href="#">Luis Matthew</a> on March 28, 2018</p>
                        </div>
                        <div class="player">
                            <audio id="player2" preload="none" controls="" style="max-width: 100%">
                                <source src="{{asset('http://www.largesound.com/ashborytour/sound/AshboryBYU.mp3')}}" type="audio/mp3">
                            </audio>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sermon">
                        <div class="sermon-text">
                            <h2><a href="#">God loves your marriage</a></h2>
                            <p class="sermon-meta">by <a href="#">Luis Matthew</a> on April 2, 2018</p>
                        </div>
                        <div class="player">
                            <audio id="player2" preload="none" controls="" style="max-width: 100%">
                                <source src="{{asset('http://www.largesound.com/ashborytour/sound/AshboryBYU.mp3')}}" type="audio/mp3">
                            </audio>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="seemore">
                        <a href="" class="btn rounded-0 form-submit bttn-fill bttn-md bttn-primary">See More</a>
                    </div>
                </div>
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