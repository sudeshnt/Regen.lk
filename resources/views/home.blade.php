@extends('index')

@section('content')
<div id="x-corp-carousel" class="carousel slide hero-slide hidden-xs" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#x-corp-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#x-corp-carousel" data-slide-to="1"></li>
        <li data-target="#x-corp-carousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="img/hero-slide-1.jpg" alt="Hero Slide">

            <div class="carousel-caption">
                <h1>It′s simple, smart and occasionally magical.</h1>

                <p>Intrinsicly negotiate corporate synergy rather than user-centric web services. Synergistically
                    transition emerging schemas and.</p>
            </div>
        </div>
        <div class="item">
            <img src="img/hero-slide-2.jpg" alt="...">

            <div class="carousel-caption">
                <h1>It′s profitable and successful!</h1>

                <p>Synergistically enhance low-risk high-yield testing procedures with clicks-and-mortar architectures.
                    Compellingly revolutionize future-proof interfaces and.</p>
            </div>
        </div>
        <div class="item">
            <img src="img/hero-slide-3.jpg" alt="...">

            <div class="carousel-caption">
                <h1>Good solutions for your business!</h1>

                <p>Monotonectally envisioneer 24/7 bandwidth with reliable imperatives. Continually unleash unique
                    niches after go forward.</p>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#x-corp-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#x-corp-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- #x-corp-carousel-->

<section class="x-services ptb-100 gray-bg">

    <section class="section-title">
        <div class="container text-center">
            <h2>What We Offer</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="img/img-offer-1.jpg" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">Investment</a></h3>

                        <p>Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat
                            tellus odio malesuada ex.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="img/img-offer-2.jpg" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">Planning</a></h3>

                        <p>Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat
                            tellus odio malesuada ex.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="img/img-offer-3.jpg" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">Analysis</a></h3>

                        <p>Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat
                            tellus odio malesuada ex.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="img/img-offer-4.jpg" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">Banking</a></h3>

                        <p>Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat
                            tellus odio malesuada ex.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
<!-- .x-services -->

<section class="x-features">
    <section class="section-title">
        <div class="container text-center">
            <h2>Our Capabilities</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 img-left">
                <img class="img-responsive" src="img/img-about.png" alt="">
            </div>
            <div class="col-md-6">
                <div class="promo-block-wrapper clearfix">
                    <div class="promo-icon">
                        <i class="fa fa-line-chart"></i>
                    </div>
                    <div class="promo-content">
                        <h3>We teach you how to improve your business</h3>

                        <p>Lorem ipsum dolor sit consectetuer adipiscing elit nonummy ib uismod tincidunt ut laoreet
                            dolore magna aliquam erat volutpat.</p>
                    </div>
                </div>
                <!-- /.promo-block-wrapper -->

                <div class="promo-block-wrapper clearfix">
                    <div class="promo-icon">
                        <i class="fa fa-life-ring"></i>
                    </div>
                    <div class="promo-content">
                        <h3>We make the technology affordable for you</h3>

                        <p>Lorem ipsum dolor sit consectetuer adipiscing elit nonummy ib uismod tincidunt ut laoreet
                            dolore magna aliquam erat volutpat.</p>
                    </div>
                </div>
                <!-- /.promo-block-wrapper -->

                <div class="promo-block-wrapper clearfix">
                    <div class="promo-icon">
                        <i class="fa fa-calculator"></i>
                    </div>
                    <div class="promo-content last-type">
                        <h3>Seamlessly grow wireless human capital before turnkey.</h3>

                        <p>Lorem ipsum dolor sit consectetuer adipiscing elit nonummy ib uismod tincidunt ut laoreet
                            dolore magna aliquam erat volutpat.</p>
                    </div>
                </div>
                <!-- /.promo-block-wrapper -->

            </div>
        </div>
    </div>
</section>
<!-- .x-features -->

<section class="team ptb-100">
    <section class="section-title">
        <div class="container text-center">
            <h2>Our Team</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <figure class="thumbnail">
                    <a href="#"><img src="img/img-team-1.jpg" class="img-responsive" alt="Image"></a>
                    <figcaption class="caption text-center">
                        <h3>Reena Scot -
                            <small>Director</small>
                        </h3>
                    </figcaption>
                </figure>
            </div>
            <!-- /.col-sm-4 -->

            <div class="col-sm-4">
                <figure class="thumbnail">
                    <a href="#"><img src="img/img-team-2.jpg" class="img-responsive" alt="Image"></a>
                    <figcaption class="caption text-center">
                        <h3>David Martin -
                            <small>Founder</small>
                        </h3>
                    </figcaption>
                </figure>
            </div>
            <!-- /.col-sm-4 -->

            <div class="col-sm-4">
                <figure class="thumbnail">
                    <a href="#"><img src="img/img-team-3.jpg" class="img-responsive" alt="Image"></a>
                    <figcaption class="caption text-center">
                        <h3>Jenefir White -
                            <small>marketing</small>
                        </h3>
                    </figcaption>
                </figure>
            </div>
            <!-- /.col-sm-4 -->

        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-sm-4">
                <figure class="thumbnail">
                    <a href="#"><img src="img/img-team-4.jpg" class="img-responsive" alt="Image"></a>
                    <figcaption class="caption text-center">
                        <h3>Reena Scot -
                            <small>Director</small>
                        </h3>
                    </figcaption>
                </figure>
            </div>
            <!-- /.col-sm-4 -->

            <div class="col-sm-4">
                <figure class="thumbnail">
                    <a href="#"><img src="img/img-team-5.jpg" class="img-responsive" alt="Image"></a>
                    <figcaption class="caption text-center">
                        <h3>David Martin -
                            <small>Founder</small>
                        </h3>
                    </figcaption>
                </figure>
            </div>
            <!-- /.col-sm-4 -->

            <div class="col-sm-4">
                <figure class="thumbnail">
                    <a href="#"><img src="img/img-team-6.jpg" class="img-responsive" alt="Image"></a>
                    <figcaption class="caption text-center">
                        <h3>Jenefir White -
                            <small>marketing</small>
                        </h3>
                    </figcaption>
                </figure>
            </div>
            <!-- /.col-sm-4 -->

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- .team -->

<section class="testimonial">
    <section class="section-title">
        <div class="container text-center">
            <h2>Satisfied Customer</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
    <div class="container">
        <div id="testimonialSlider" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <blockquote>
                        <ul>
                            <li><img src="img/img-testimonial-1.jpg" class="img-responsive" alt=""/></li>
                            <li class="name">Justus Kühn</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel </br>lacus
                            pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec</br> diam elit
                            consequat eget augue vitae aliquet sollicitudin.
                        </p>

                    </blockquote>
                </div>
                <div class="item">
                    <blockquote>
                        <ul>
                            <li><img src="img/img-testimonial-2.jpg" class=" img-responsive" alt=""/></li>
                            <li class="name">Lennox Arnold</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel </br>lacus
                            pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec</br> diam elit
                            consequat eget augue vitae aliquet sollicitudin.
                        </p>

                    </blockquote>
                </div>
                <div class="item">
                    <blockquote>
                        <ul>
                            <li><img src="img/img-testimonial-3.jpg" class="img-responsive" alt=""/></li>
                            <li class="name">Paulina Berger</li>
                        </ul>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel </br>lacus
                            pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec</br> diam elit
                            consequat eget augue vitae aliquet sollicitudin.
                        </p>
                    </blockquote>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#testimonialSlider" role="button" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#testimonialSlider" role="button" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- #testimonialSlider -->
    </div>
</section>
<!-- .testimonial -->

<section class="client-logo ptb-100">
    <section class="section-title">
        <div class="container text-center">
            <h2>Our Clients</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="img/logo-client-1.jpg" alt="Image"></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="img/logo-client-2.jpg" alt="Image"></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="img/logo-client-3.jpg" alt="Image"></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="img/logo-client-4.jpg" alt="Image"></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="img/logo-client-5.jpg" alt="Image"></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="img/logo-client-6.jpg" alt="Image"></a>
            </div>
        </div>
    </div>
    <!--end of .container -->
</section>
<!-- /.client-logo -->
@endsection