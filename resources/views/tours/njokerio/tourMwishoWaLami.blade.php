<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta author="Tobin Karioki">
    <meta description="HTML 5 File">
    <meta viewport="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('/css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{url('/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{url('/css/yamm.css')}}">

    <link rel="stylesheet" href="{{url('/css/diaspora.css')}}">

    <link rel="stylesheet" href="{{url('/css/sidenav.css')}}">

    <link rel="icon" href="{{url('images/eger.png')}}">

    <title>Diaspora Room Booking</title>

    <style>
        ul.nav-tabs li a{
            color: #fed136;
            background-color: #222222;
        }

        ul.nav-tabs li a:hover{
            color: #222222;
            background-color: #fed136;
        }

        body {
            background-image: url("{{url('images/paint.jpg')}}");
        }
    </style>
</head>

<body>
@include('hav')
<div id="main">
    <div class="container" style="padding-top: 60px;">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="color: #fff; border-bottom: 1px solid #fed136;">tour
                    <small style="color: #fed136;"><b style="font-size: 30px;">m</b>wisho <b style="font-size: 30px;">w</b>a <b style="font-size: 30px;">l</b>ami <b style="font-size: 30px;">n</b>jokerio</small>
                </h1>

                <ol class="breadcrumb" style="background-color: #222222">
                    <li><a href="/diaspora/public/home" style="color: #fed136;">home</a></li>
                    <li class="active" style="color: white">tour_mwisho wa lami</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                @include('contactCarousel')
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header" style="color: #fed136; border-bottom: 1px solid #fed136;"><b style="font-size: 30px;">r</b>ooms <b style="font-size: 30px;">o</b>ffered <b style="font-size: 30px;">b</b>y <b style="font-size: 30px;">m</b>wisho <b style="font-size: 30px;">w</b>a <b style="font-size: 30px;">l</b>ami <b style="font-size: 30px;">n</b>jokerio</h3>
            </div>

            <div class="col-lg-12">
                <ul class="nav nav-tabs nav-justified" id="myTab">
                    <li class="active"><a href="#mwishowalami1" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 1</a></li>
                    <li><a href="#mwishowalami2" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 2</a></li>
                    <li><a href="#mwishowalami3" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 3</a></li>
                    <li><a href="#mwishowalami4" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 4</a></li>
                    <li><a href="#mwishowalami5" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 5</a></li>
                    <li><a href="#mwishowalami6" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 6</a></li>
                    <li><a href="#mwishowalami7" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 7</a></li>
                    <li><a href="#mwishowalami8" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 8</a></li>
                    <li><a href="#mwishowalami9" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 9</a></li>
                    <li><a href="#mwishowalami10" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 10</a></li><br>
                    <li><a href="#mwishowalami11" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 11</a></li>
                    <li><a href="#mwishowalami12" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 12</a></li>
                    <li><a href="#mwishowalami13" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 13</a></li>
                    <li><a href="#mwishowalami14" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 14</a></li>
                    <li><a href="#mwishowalami15" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 15</a></li>
                    <li><a href="#mwishowalami16" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 16</a></li>
                    <li><a href="#mwishowalami17" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 17</a></li>
                    <li><a href="#mwishowalami18" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 18</a></li>
                    <li><a href="#mwishowalami19" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 19</a></li>
                    <li><a href="#mwishowalami20" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 20</a></li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane active fade in" id="mwishowalami1">
                        <div class="row">
                            <div class="col-lg-9">
                                <h4><b style="font-size: 30px;">r</b>oom <b style="font-size: 30px;">o</b>ne</h4>
                                @include('contactCarousel')
                            </div>

                            <div class="col-lg-3">
                                <br>
                                <br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-heart"></i> add to wishlist</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-street-view"></i> physical tour</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-mobile"></i> contact management</button><br><br><br><br>
                                <br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-gavel"></i> book room one</button><br><br><br>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="mwishowalami2">
                        <div class="row">
                            <div class="col-lg-9">
                                <h4><b style="font-size: 30px;">r</b>oom <b style="font-size: 30px;">t</b>wo</h4>
                                @include('contactCarousel')
                            </div>

                            <div class="col-lg-3">
                                <br>
                                <br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-heart"></i> add to wishlist</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-street-view"></i> physical tour</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-mobile"></i> contact management</button><br><br><br><br>
                                <br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-gavel"></i> book room two</button><br><br><br>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="mwishowalami3">
                        <div class="row">
                            <div class="col-lg-9">
                                <h4><b style="font-size: 30px;">r</b>oom <b style="font-size: 30px;">t</b>hree</h4>
                                @include('contactCarousel')
                            </div>

                            <div class="col-lg-3">
                                <br>
                                <br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-heart"></i> add to wishlist</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-street-view"></i> physical tour</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-mobile"></i> contact management</button><br><br><br><br>
                                <br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-gavel"></i> book room three</button><br><br><br>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="mwishowalami4">
                        <div class="row">
                            <div class="col-lg-9">
                                <h4><b style="font-size: 30px;">r</b>oom <b style="font-size: 30px;">f</b>our</h4>
                                @include('contactCarousel')
                            </div>

                            <div class="col-lg-3">
                                <br>
                                <br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-heart"></i> add to wishlist</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-street-view"></i> physical tour</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-mobile"></i> contact management</button><br><br><br><br>
                                <br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-gavel"></i> book room four</button><br><br><br>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="mwishowalami5">
                        <div class="row">
                            <div class="col-lg-9">
                                <h4><b style="font-size: 30px;">r</b>oom <b style="font-size: 30px;">f</b>ive</h4>
                                @include('contactCarousel')
                            </div>

                            <div class="col-lg-3">
                                <br>
                                <br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-heart"></i> add to wishlist</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-street-view"></i> physical tour</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-mobile"></i> contact management</button><br><br><br><br>
                                <br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-gavel"></i> book room five</button><br><br><br>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="mwishowalami6">
                        <div class="row">
                            <div class="col-lg-9">
                                <h4><b style="font-size: 30px;">r</b>oom <b style="font-size: 30px;">s</b>ix</h4>
                                @include('contactCarousel')
                            </div>

                            <div class="col-lg-3">
                                <br>
                                <br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-heart"></i> add to wishlist</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-street-view"></i> physical tour</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-mobile"></i> contact management</button><br><br><br><br>
                                <br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-gavel"></i> book room six</button><br><br><br>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="mwishowalami7">
                        <div class="row">
                            <div class="col-lg-9">
                                <h4><b style="font-size: 30px;">r</b>oom <b style="font-size: 30px;">s</b>even</h4>
                                @include('contactCarousel')
                            </div>

                            <div class="col-lg-3">
                                <br>
                                <br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-heart"></i> add to wishlist</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-street-view"></i> physical tour</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-mobile"></i> contact management</button><br><br><br><br>
                                <br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-gavel"></i> book room seven</button><br><br><br>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="mwishowalami8">
                        <div class="row">
                            <div class="col-lg-9">
                                <h4><b style="font-size: 30px;">r</b>oom <b style="font-size: 30px;">e</b>ight</h4>
                                @include('contactCarousel')
                            </div>

                            <div class="col-lg-3">
                                <br>
                                <br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-heart"></i> add to wishlist</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-street-view"></i> physical tour</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-mobile"></i> contact management</button><br><br><br><br>
                                <br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-gavel"></i> book room eight</button><br><br><br>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="mwishowalami9">
                        <div class="row">
                            <div class="col-lg-9">
                                <h4><b style="font-size: 30px;">r</b>oom <b style="font-size: 30px;">n</b>ine</h4>
                                @include('contactCarousel')
                            </div>

                            <div class="col-lg-3">
                                <br>
                                <br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-heart"></i> add to wishlist</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-street-view"></i> physical tour</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-mobile"></i> contact management</button><br><br><br><br>
                                <br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-gavel"></i> book room nine</button><br><br><br>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="mwishowalami10">
                        <div class="row">
                            <div class="col-lg-9">
                                <h4><b style="font-size: 30px;">r</b>oom <b style="font-size: 30px;">t</b>en</h4>
                                @include('contactCarousel')
                            </div>

                            <div class="col-lg-3">
                                <br>
                                <br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-heart"></i> add to wishlist</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-street-view"></i> physical tour</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-mobile"></i> contact management</button><br><br><br><br>
                                <br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-gavel"></i> book room ten</button><br><br><br>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="mwishowalami11">
                        <div class="row">
                            <div class="col-lg-9">
                                <h4><b style="font-size: 30px;">r</b>oom <b style="font-size: 30px;">e</b>leven</h4>
                                @include('contactCarousel')
                            </div>

                            <div class="col-lg-3">
                                <br>
                                <br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-heart"></i> add to wishlist</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-street-view"></i> physical tour</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-mobile"></i> contact management</button><br><br><br><br>
                                <br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-gavel"></i> book room eleven</button><br><br><br>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="mwishowalami12">
                        <div class="row">
                            <div class="col-lg-9">
                                <h4><b style="font-size: 30px;">r</b>oom <b style="font-size: 30px;">t</b>welve</h4>
                                @include('contactCarousel')
                            </div>

                            <div class="col-lg-3">
                                <br>
                                <br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-heart"></i> add to wishlist</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-street-view"></i> physical tour</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-mobile"></i> contact management</button><br><br><br><br>
                                <br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-gavel"></i> book room twelve</button><br><br><br>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="mwishowalami13">
                        <div class="row">
                            <div class="col-lg-9">
                                <h4><b style="font-size: 30px;">r</b>oom <b style="font-size: 30px;">t</b>hirteen</h4>
                                @include('contactCarousel')
                            </div>

                            <div class="col-lg-3">
                                <br>
                                <br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-heart"></i> add to wishlist</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-street-view"></i> physical tour</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-mobile"></i> contact management</button><br><br><br><br>
                                <br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-gavel"></i> book room thirteen</button><br><br><br>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="mwishowalami14">
                        <div class="row">
                            <div class="col-lg-9">
                                <h4><b style="font-size: 30px;">r</b>oom <b style="font-size: 30px;">f</b>ourteen</h4>
                                @include('contactCarousel')
                            </div>

                            <div class="col-lg-3">
                                <br>
                                <br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-heart"></i> add to wishlist</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-street-view"></i> physical tour</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-mobile"></i> contact management</button><br><br><br><br>
                                <br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-gavel"></i> book room fourteen</button><br><br><br>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="mwishowalami15">
                        <div class="row">
                            <div class="col-lg-9">
                                <h4><b style="font-size: 30px;">r</b>oom <b style="font-size: 30px;">f</b>ifteen</h4>
                                @include('contactCarousel')
                            </div>

                            <div class="col-lg-3">
                                <br>
                                <br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-heart"></i> add to wishlist</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-street-view"></i> physical tour</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-mobile"></i> contact management</button><br><br><br><br>
                                <br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-gavel"></i> book room fifteen</button><br><br><br>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="mwishowalami16">
                        <div class="row">
                            <div class="col-lg-9">
                                <h4><b style="font-size: 30px;">r</b>oom <b style="font-size: 30px;">s</b>ixteen</h4>
                                @include('contactCarousel')
                            </div>

                            <div class="col-lg-3">
                                <br>
                                <br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-heart"></i> add to wishlist</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-street-view"></i> physical tour</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-mobile"></i> contact management</button><br><br><br><br>
                                <br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-gavel"></i> book room sixteen</button><br><br><br>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="mwishowalami17">
                        <div class="row">
                            <div class="col-lg-9">
                                <h4><b style="font-size: 30px;">r</b>oom <b style="font-size: 30px;">s</b>eventeen</h4>
                                @include('contactCarousel')
                            </div>

                            <div class="col-lg-3">
                                <br>
                                <br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-heart"></i> add to wishlist</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-street-view"></i> physical tour</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-mobile"></i> contact management</button><br><br><br><br>
                                <br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-gavel"></i> book room seventeen</button><br><br><br>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="mwishowalami18">
                        <div class="row">
                            <div class="col-lg-9">
                                <h4><b style="font-size: 30px;">r</b>oom <b style="font-size: 30px;">e</b>ighteen</h4>
                                @include('contactCarousel')
                            </div>

                            <div class="col-lg-3">
                                <br>
                                <br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-heart"></i> add to wishlist</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-street-view"></i> physical tour</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-mobile"></i> contact management</button><br><br><br><br>
                                <br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-gavel"></i> book room eighteen</button><br><br><br>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="mwishowalami19">
                        <div class="row">
                            <div class="col-lg-9">
                                <h4><b style="font-size: 30px;">r</b>oom <b style="font-size: 30px;">n</b>ineteen</h4>
                                @include('contactCarousel')
                            </div>

                            <div class="col-lg-3">
                                <br>
                                <br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-heart"></i> add to wishlist</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-street-view"></i> physical tour</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-mobile"></i> contact management</button><br><br><br><br>
                                <br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-gavel"></i> book room nineteen</button><br><br><br>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="mwishowalami20">
                        <div class="row">
                            <div class="col-lg-9">
                                <h4><b style="font-size: 30px;">r</b>oom <b style="font-size: 30px;">t</b>wenty</h4>
                                @include('contactCarousel')
                            </div>

                            <div class="col-lg-3">
                                <br>
                                <br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-heart"></i> add to wishlist</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-street-view"></i> physical tour</button><br><br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-mobile"></i> contact management</button><br><br><br><br>
                                <br><br><br>
                                <button style="background-color: #fed136;color: #222222;border: 2px solid #222222; width: 270px;" type="submit" class="btn"><i class="fa fa-gavel"></i> book room twenty</button><br><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br><br>

        @include('footer')
    </div>
</div>

@include('sidenav')

<script src="{{url('js/jquery.js')}}"></script>
<script src="{{url('js/bootstrap.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/diaspora.js')}}"></script>
</body>
</html>