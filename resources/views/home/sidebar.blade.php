
<!-- MENU -->
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">
        @php
            $mainCategories = \App\Http\Controllers\HomeController::maincategorylist()
        @endphp
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a href="#" class="navbar-brand">Jobs Agency</a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-nav-first">
                <li class="active"><a href="index.html">Home</a></li>

                <li class="dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Job Categories <span class="caret"></span></a>
                    @foreach($mainCategories as $rs)

                          <ul class="dropdown-menu">
                                <div class="row">
                                        <a class="dropdown-toggle" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false"> {{$rs->title}} <span class="caret"></span></a>
                           @if(count($rs->children))
                               @include('home.categorytree', ['children' => $rs->children])
                           @endif

                                </div>
                          </ul>
                </li>
                @endforeach

                <li><a href="about-us.html">About Us</a></li>
                <li><a href="blog-posts.html">Blog</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>

                    <ul class="dropdown-menu">
                        <li><a href="team.html">Team</a></li>
                        <li><a href="testimonials.html">Testimonials</a></li>
                        <li><a href="terms.html">Terms</a></li>
                    </ul>
                </li>
                <li><a href="{{route('faq')}}">FAQ</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                        </ul>

        </div>
    </div>
</section>
