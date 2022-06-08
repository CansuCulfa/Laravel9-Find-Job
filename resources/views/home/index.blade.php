@extends('layouts.frontbase')

@section('title', $setting->title)
@section('description',  $setting->description)
@section('keywords',  $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('slider')
    @include('home.slider')
@endsection

@section('content')

    <section>
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    @foreach($sliderdata as $key=>$rs)
                        @if($key==0)
                            <div class="mySlides fade-my-slide">
                                <div class="numbertext">1 / 3</div>
                                <img src="{{Storage::url($rs->image)}}" style="width:100%">

                                  <a>{{$rs->title}}</a>

                                <div class="text center-block">
                                    <td><a href="{{route('job' , ['id'=>$rs->id])}}" class="btn btn-success">Click for view</a> </td>
                                </div>
                            </div>
                        @endif

                        <div class="mySlides fade-my-slide">

                            <div class="numbertext">2 / 3</div>
                            <img src="{{Storage::url($rs->image)}}" style="width:100%">

                            <a>{{$rs->title}}</a>

                            <div class="text center">
                                <td><a href="{{route('job' , ['id'=>$rs->id])}}" class="btn btn-success">Click for view</a> </td>
                            </div>
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



        </div>
    </section>
    <main>
        <section>
            <div class="container">

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-title text-center">
                            <h2>İş İlanları <small>Size uygun pozisyonlar olabilir.</small></h2>
                        </div>
                    </div>

                    <div class="col-md-push-4 col-sm-4">
                        <div class="courses-thumb">
                            <div class="courses-top">
                                @foreach($joblist1 as $rs)
                                    <div class="courses-image">
                                        <img src="{{Storage::url($rs->image)}}" class="img-responsive">
                                    </div>
                                    <div class="courses-detail">
                                        <h3><a href="job-details.html">{{$rs->title}}</a></h3>

                                        <p class="lead"><strong>{{$rs->salary}}</strong></p>

                                        <p> <strong>{{$rs->title}}</strong></p>
                                    </div>
                                    <div class="courses-info">
                                        <a href="{{route('job',['id'=>$rs->id])}}" class="section-btn btn btn-primary btn-block">View Details</a>
                                    </div>
                                @endforeach
                        </div>
                    </div>
                    </div>

                </div>

            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-title text-center">
                            <h2>Latest Blog posts <small>Lorem ipsum dolor sit amet.</small></h2>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="courses-thumb courses-thumb-secondary">
                            <div class="courses-top">
                                <div class="courses-image">
                                    <img src="{{asset('assets')}}/images/other-1-720x480.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="courses-date">
                                    <span title="Author"><i class="fa fa-user"></i> John Doe</span>
                                    <span title="Date"><i class="fa fa-calendar"></i> 12/06/2020 10:30</span>
                                    <span title="Views"><i class="fa fa-eye"></i> 114</span>
                                </div>
                            </div>

                            <div class="courses-detail">
                                <h3><a href="blog-post-details.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h3>
                            </div>

                            <div class="courses-info">
                                <a href="blog-post-details.html" class="section-btn btn btn-primary btn-block">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="courses-thumb courses-thumb-secondary">
                            <div class="courses-top">
                                <div class="courses-image">
                                    <img src="{{asset('assets')}}/images/other-2-720x480.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="courses-date">
                                    <span title="Author"><i class="fa fa-user"></i> John Doe</span>
                                    <span title="Date"><i class="fa fa-calendar"></i> 12/06/2020 10:30</span>
                                    <span title="Views"><i class="fa fa-eye"></i> 114</span>
                                </div>
                            </div>

                            <div class="courses-detail">
                                <h3><a href="blog-post-details.html">Tempora molestiae, iste, consequatur unde sint praesentium!</a></h3>
                            </div>

                            <div class="courses-info">
                                <a href="blog-post-details.html" class="section-btn btn btn-primary btn-block">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="courses-thumb courses-thumb-secondary">
                            <div class="courses-top">
                                <div class="courses-image">
                                    <img src="{{asset('assets')}}/images/other-3-720x480.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="courses-date">
                                    <span title="Author"><i class="fa fa-user"></i> John Doe</span>
                                    <span title="Date"><i class="fa fa-calendar"></i> 12/06/2020 10:30</span>
                                    <span title="Views"><i class="fa fa-eye"></i> 114</span>
                                </div>
                            </div>

                            <div class="courses-detail">
                                <h3><a href="blog-post-details.html">A voluptas ratione, error provident distinctio, eaque id officia?</a></h3>
                            </div>

                            <div class="courses-info">
                                <a href="blog-post-details.html" class="section-btn btn btn-primary btn-block">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="testimonial">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-12">
                        <div class="section-title text-center">
                            <h2>Testimonials <small>from around the world</small></h2>
                        </div>

                        <div class="owl-carousel owl-theme owl-client">
                            <div class="col-md-4 col-sm-4">
                                <div class="item">
                                    <div class="tst-image">
                                        <img src="{{asset('assets')}}/images/tst-image-1-200x216.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="tst-author">
                                        <h4>Jackson</h4>
                                        <span>Shopify Developer</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas, facilis adipisci dolorem exercitationem nemo aut error impedit repudiandae iusto.</p>
                                    <div class="tst-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <div class="item">
                                    <div class="tst-image">
                                        <img src="{{asset('assets')}}/images/tst-image-2-200x216.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="tst-author">
                                        <h4>Camila</h4>
                                        <span>Marketing Manager</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente error, unde eos laborum consequatur officiis perferendis vel debitis, dolore, ipsum quibusdam culpa quisquam, reiciendis aspernatur.</p>
                                    <div class="tst-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <div class="item">
                                    <div class="tst-image">
                                        <img src="{{asset('assets')}}/images/tst-image-3-200x216.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="tst-author">
                                        <h4>Barbie</h4>
                                        <span>Art Director</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit laborum minima autem, reprehenderit mollitia amet id, beatae quo sequi culpa assumenda neque a quisquam, magni.</p>
                                    <div class="tst-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <div class="item">
                                    <div class="tst-image">
                                        <img src="{{asset('assets')}}/images/tst-image-4-200x216.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="tst-author">
                                        <h4>Andrio</h4>
                                        <span>Web Developer</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore natus culpa laudantium sit dolores quidem at nulla, iure atque laborum! Odit tempora, enim aliquid at modi illum ducimus explicabo soluta.</p>
                                    <div class="tst-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- CONTACT -->
    <section id="contact">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <form id="contact-form" role="form" action="" method="post">
                        <div class="section-title">
                            <h2>Contact us <small>we love conversations. let us talk!</small></h2>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <input type="text" class="form-control" placeholder="Enter full name" name="name" required>

                            <input type="email" class="form-control" placeholder="Enter email address" name="email" required>

                            <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" required></textarea>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <input type="submit" class="form-control" name="send message" value="Send Message">
                        </div>

                    </form>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="contact-image">
                        <img src="{{asset('assets')}}/images/contact-1-600x400.jpg" class="img-responsive" alt="Smiling Two Girls">
                    </div>
                </div>

            </div>
        </div>
    </section>






@endsection
