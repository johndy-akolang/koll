@extends('app')

@section('title')
    My Account | Koll.com.ph New and Free Classified Ads and Buy and Sell Website Philippines
@stop

@section('content')

<div class="account">
    <div class="main">
        <div class="wrap">

            {{-- cover image --}}
            <div class="cvrimg">
                <div id="cover-wrapper">
                    <img src="{{ asset('/images/profile_coverimg_wood.jpg') }}">
                </div>
            </div>

            <div id="index-card" class="idx_crd no_feedback clearfix">

                <div class="shad clearfix">

                    {{-- avatar --}}
                    <div class="usrimg">
                        <div class="icon">
                            <span class="cll">
                                <img class="prof_img img" src="{{ asset(Auth::user()->profilepic) }}">
                            </span>
                        </div>
                    </div>

                    {{-- user info --}}
                    <div class="usrinfo">
                        <div class="mbg">
                            <span class="mbg-1">
                                <i class="fa fa-info-circle"></i>
                                <a class="mbg-id" href="#">{{ Auth::user()->first_name }}</a>
                            </span>
                        </div>
                        <div class="mbg mt-10">
                            <span>0 Credits</span>
                        </div>

                        <div class="mbg mt-10">
                            <a href="{{ url('/account/edit/'.Auth::user()->id.'') }}" class="c-fff btn input-green button">Edit Profile</a>
                        </div>

                    </div>

                    {{-- shorcut sell your item --}}
                    <div class="shrtct">
                        <span class="store each">
                             <a title="Sell your item" href="/item/create" class="mr-5">
                                <i class="fa fa-buysellads"></i>
                                Sell your item
                            </a>
                        </span>
                    </div>

                </div>

                {{-- profile accoutn --}}
                <div class="profile-account clearfix">

                    {{-- profile title --}}
                    <h3>Profile</h3>

                    {{-- profile name --}}
                    <div class="profile-account-cont floatLeft">
                        <div class="profile-account-label floatLeft">
                            <label>Name:</label>
                        </div>

                        <div class="profile-account-user floatLeft">
                            <span id="name" class="datainfo">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                        </div>
                    </div>

                    {{-- profile email --}}
                    <div class="profile-account-cont floatLeft">
                        <div class="profile-account-label floatLeft">
                            <label>Email:</label>
                        </div>

                        <div class="profile-account-user floatLeft">
                            <span id="email" class="datainfo">{{ Auth::user()->email }}</span>
                        </div>
                    </div>

                    {{-- profile address --}}
                    <div class="profile-account-cont floatLeft">
                        <div class="profile-account-label floatLeft">
                            <label>Address:</label>
                        </div>

                        <div class="profile-account-user floatLeft">
                            <span id="address" class="datainfo">{{ Auth::user()->useraddress }}</span>
                        </div>
                    </div>

                    {{-- profile mobile number --}}
                    <div class="profile-account-cont floatLeft">
                        <div class="profile-account-label floatLeft">
                            <label>Mobile Number:</label>
                        </div>

                        <div class="profile-account-user floatLeft">
                            <span id="mobile" class="datainfo">{{ Auth::user()->mobile }}</span>
                        </div>
                    </div>

                    {{-- profile company name --}}
                    <div class="profile-account-cont floatLeft">
                        <div class="profile-account-label floatLeft">
                            <label>Company Name:</label>
                        </div>

                        <div class="profile-account-user floatLeft">
                            <span id="company" class="datainfo">{{ Auth::user()->companyname }}</span>
                        </div>
                    </div>

                    {{-- profile company address --}}
                    <div class="profile-account-cont floatLeft">
                        <div class="profile-account-label floatLeft">
                            <label>Company Address:</label>
                        </div>

                        <div class="profile-account-user floatLeft">
                            <span id="company" class="datainfo">{{ Auth::user()->companyaddress }}</span>
                        </div>
                    </div>

                    {{-- profile company number --}}
                    <div class="profile-account-cont floatLeft">
                        <div class="profile-account-label floatLeft">
                            <label>Company Tel no.:</label>
                        </div>

                        <div class="profile-account-user floatLeft">
                            <span id="company" class="datainfo">{{ Auth::user()->companynumber }}</span>
                        </div>
                    </div>

                    {{-- profile date registered --}}
                    <div class="profile-account-cont floatLeft">
                        <div class="profile-account-label floatLeft">
                            <label>Registered:</label>
                        </div>

                        <div class="profile-account-user floatLeft">
                            <span id="registered" class="datainfo">{{ Auth::user()->created_at }}</span>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>



@endsection