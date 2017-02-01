{{-- header top --}}
<div class="header-top">
    <div class="wrap">

        {{-- logo website --}}
        <a class="res-logo floatLeft" href="{{ route('home') }}" title="Koll.com.ph"><img class="logo-koll" src="{{ asset('/images/logo-koll.png') }}" alt="Koll.com.ph" title="Koll.com.ph"></a>

        <div class="cssmenu">
            @if (Auth::user())
            <ul>
                <li><a href="{{ asset('about') }}" class="k-about dropdown-toggle">About</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-user"></i>
                        <!-- <img class="prof_img img" src="{{ asset(Auth::user()->profilepic) }}"> -->
                        {{ Auth::user()->first_name }}
                        <i class="s-arrow-down ml-10 fa fa-sort-desc"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- <li><a href="#" class="user-menu"><i class="fa fa-inbox"></i>Inbox</a></li> -->
                        <li><a href="{{ route('user-items') }}" class="user-menu"><i class="fa fa-suitcase"></i>Manage Ads</a></li>
                        <li><a href="{{ url('/account/user/'.Auth::id()) }}" class="user-menu"><i class="fa fa-gear"></i>Account</a></li>
                        <!-- <li><a href="#" class="user-menu"><i class="fa fa-money"></i>0 Credit</a></li> -->
                        <li><a href="{{ route('user-logout') }}" class="user-menu"><i class="fa fa-sign-out"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>
            @else
            <ul class="member-actions floatLeft">
                <li><a href="{{ asset('about') }}" class="k-about">About</a></li>
                <li>
                    <a class="login" href="{{ route('user-login') }}">
                        <!-- <i class="fa fa-sign-in"></i> -->
                        Log in
                    </a>
                </li>
                <li>
                    <a class="btn-white btn-small" href="{{ route('user-register') }}">
                        <!-- <i class="fa fa-file-o"></i> -->
                        Sign up
                    </a>
                </li>
            </ul>
            @endif
        </div>

        <div class="clear"></div>
    </div>
</div>

{{-- header bottom --}}
<div class="header-bottom">
    <div class="wrap">

        <div class="header-bottom-left clearfix">

            {{-- list menu  top header --}}
            <!-- <div class="socialite floatLeft">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="advanced-cont floatLeft">Advanced</div> -->
            <!--
            <div id="dd" class="wrapper-dropdown-5 floatLeft" tabindex="1">Select by Category
                <ul class="dropdown-select-category">
                    <li>
                        <a href="#">
                            <i class="fa fa-buysellads"></i>
                            Buy and Sell
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-home"></i>
                            Real Estate
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-truck"></i>
                            Vehicles
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-diamond"></i>
                            Fashion
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-lightbulb-o"></i>
                            Electronics
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-futbol-o"></i>
                            Sports
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-bug"></i>
                            Toys
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-github"></i>
                            Pets
                        </a>
                    </li>
                </ul>
            </div> -->


            <!-- form search -->
            <div class="search">

                <form class="navbar-form" role="search" action="{{ route('search') }}">
                    <div class="form-group" style="display:inline;">
                        <div class="input-group">
                            {{-- Double curly parantheses auto escape the provided string, so it's safe to use old('q') below directly --}}
                            <input type="text" class="q form-control" placeholder="Looking for..." name="q" value="{{ old('q') }}">
                            <span class="input-group-addon">
                              <button type="submit" class="btn btn-default">
                                <span class="fa fa-search"></span>
                              </button>
                            </span>
                        </div>
                    </div>
                </form>

            </div>


        </div>

        {{-- container for posr your ads --}}
        <div class="header-bottom-right your-ads-here">

          <a class="c-fff btn input-green button input-blue width251" href="{{ route('user-items-create') }}">
              <!-- <i class="fa fa-file-o"></i> -->
              Sell your ads here
          </a>
            {{-- button for post your ads here --}}
            {{--{!! Form::submit('Sell your ads here',
                    array('class' => 'btn button input-green width251', 'name' => 'postyourads', 'id' => 'sellads')) !!}--}}


        </div>
    </div>
</div>
