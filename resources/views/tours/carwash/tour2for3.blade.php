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
                    <small style="color: #fed136;"><b style="font-size: 30px;">2</b> for <b style="font-size: 30px;">3 </b><b style="font-size: 30px;">c</b>arwash </small>
                </h1>

                <ol class="breadcrumb" style="background-color: #222222">
                    <li><a href="/diaspora/public/home" style="color: #fed136;">home</a></li>
                    <li class="active" style="color: white">tour_2 for 3</li>
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
                <h3 class="page-header" style="color: #fed136; border-bottom: 1px solid #fed136;"><b style="font-size: 30px;">r</b>ooms <b style="font-size: 30px;">o</b>ffered <b style="font-size: 30px;">b</b>y <b style="font-size: 30px;">2</b> for <b style="font-size: 30px;">3</b> <b style="font-size: 30px;">c</b>arwash</h3>
            </div>

            <div class="col-lg-12">
                <ul class="nav nav-tabs nav-justified" id="myTab">
                    <li class="active"><a href="#2for31" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 1</a></li>
                    <li><a href="#2for32" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 2</a></li>
                    <li><a href="#2for33" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 3</a></li>
                    <li><a href="#2for34" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 4</a></li>
                    <li><a href="#2for35" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 5</a></li>
                    <li><a href="#2for36" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 6</a></li>
                    <li><a href="#2for37" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 7</a></li>
                    <li><a href="#2for38" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 8</a></li>
                    <li><a href="#2for39" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 9</a></li>
                    <li><a href="#2for310" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 10</a></li><br>
                    <li><a href="#2for311" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 11</a></li>
                    <li><a href="#2for312" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 12</a></li>
                    <li><a href="#2for313" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 13</a></li>
                    <li><a href="#2for314" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 14</a></li>
                    <li><a href="#2for315" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 15</a></li>
                    <li><a href="#2for316" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 16</a></li>
                    <li><a href="#2for317" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 17</a></li>
                    <li><a href="#2for318" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 18</a></li>
                    <li><a href="#2for319" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 19</a></li>
                    <li><a href="#2for320" data-toggle="tab"><i class="fa fa-bed"></i> <b style="font-size: 20px;">r</b>oom 20</a></li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane active fade in" id="2for31">
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

                    <div class="tab-pane fade" id="2for32">
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

                    <div class="tab-pane fade" id="2for33">
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

                    <div class="tab-pane fade" id="2for34">
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

                    <div class="tab-pane fade" id="2for35">
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


                    <div class="tab-pane fade" id="2for36">
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

                    <div class="tab-pane fade" id="2for37">
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

                    <div class="tab-pane fade" id="2for38">
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

                    <div class="tab-pane fade" id="2for39">
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

                    <div class="tab-pane fade" id="2for310">
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

                    <div class="tab-pane fade" id="2for311">
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

                    <div class="tab-pane fade" id="2for312">
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

                    <div class="tab-pane fade" id="2for313">
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

                    <div class="tab-pane fade" id="2for314">
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

                    <div class="tab-pane fade" id="2for315">
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


                    <div class="tab-pane fade" id="2for316">
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

                    <div class="tab-pane fade" id="2for317">
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

                    <div class="tab-pane fade" id="2for318">
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

                    <div class="tab-pane fade" id="2for319">
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

                    <div class="tab-pane fade" id="2for320">
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
