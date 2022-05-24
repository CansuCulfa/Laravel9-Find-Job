
<!-- HOME -->
<section id="home">
        <!--
        <div class="owl-carousel owl-theme home-slider">
                <div class="item item-first">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-6 col-sm-12">

                                <h1>sdfgsdfg.</h1>
                                <h3>Voluptas dignissimos esse, explicabo cum fugit eaque, perspiciatis quia ab nisi sapiente delectus eiet.</h3>
                                <a href="jobs.html" class="section-btn btn btn-default">Browse Jobs</a>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="item item-second">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-6 col-sm-12">
                            <h1>Distinctio explicabo vero animi culpa facere voluptatem.</h1>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, excepturi.</h3>
                            <a href="jobs.html" class="section-btn btn btn-default">Browse Jobs</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item item-third">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-6 col-sm-12">
                            <h1>Efficient Learning Methods</h1>
                            <h3>Nam eget sapien vel nibh euismod vulputate in vel nibh. Quisque eu ex eu urna venenatis sollicitudin ut at libero.</h3>
                            <a href="jobs.html" class="section-btn btn btn-default">Browse Jobs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        -->
    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        @foreach($sliderdata as $key=>$rs)
            @if($key==0)
                <div class="mySlides fade-my-slide">
                    <div class="numbertext">1 / 3</div>
                    <img src="{{Storage::url($rs->image)}}" style="width:100%">
                    <div class="text">Caption One</div>
                </div>
            @endif

            <div class="mySlides fade-my-slide">

                <div class="numbertext">2 / 3</div>
                <img src="{{Storage::url($rs->image)}}" style="width:100%">
                <div class="text">Caption Two</div>
            </div>
        @endforeach




        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

</section>
