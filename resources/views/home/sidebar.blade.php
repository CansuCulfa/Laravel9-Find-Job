
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
            <a href="{{route('home')}}" class="navbar-brand">Jobs Agency</a>
        </div>
        <div class="pull-right">
            <ul class="header-btns">
                <li class="header-account dropdown default-dropdown">
                    @auth
                        <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                            <div class="header-btns-icon">
                                <i class="fa fa-user-o"></i>
                            </div>
                            <strong class="text-uppercase">{{Auth::user()->name}} <i class="fa fa-caret-down"></i> </strong>
                        </div>
                        <a href="/logoutuser" class="text-uppercase">Logout</a>
                    @endauth
                    @guest
                        <a href="/loginuser" class="text-uppercase">Login</a> / <a href="/registeruser" class="text-uppercase">Join</a>
                    @endguest
                    <ul class="custom-menu">

                    </ul>
                </li>
            </ul>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-nav-first">
                <li class="active"><a href="{{route('home')}}">Home</a></li>

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

                <li><a href="{{route('faq')}}">FAQ</a></li>
                <li><a href="{{route('about')}}">About Us</a></li>
                <li><a href="{{route('contact')}}">Contact Us</a></li>
                <li><a href="{{route('references')}}">References</a></li>

                        </ul>

        </div>


    </div>
</section>
