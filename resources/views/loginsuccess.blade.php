@extends('app')

@section('title')
    Login success
@stop

@section('content')

<div class="loginsuccess">
    <div class="main">

        <div class="wrap">
            <div class="loginsuccess-cont">

                <!-- top header -->
                <div class="pdt15">

                    <!-- title message -->
                    <h1 class="customh1">
                        <div class="sm-co sm-su">
                            <i class="gspr icsu"></i>
                            <p> Welcome to KOLL.com.ph, {{ Auth::user() ->first_name }}</p>
                        </div>
                    </h1>

                </div>


                <!-- body -->
                <div class="cntr">

                    <!-- user email -->
                    <div class="pdt20">
                        You'll be able to login to KOLL.com.ph with
                        <b>{{ Auth::user() ->email }}</b>
                    </div>

                    <!-- admin message to user -->
                    <ul class="infc">

                        <li>Congratulations! You're now member of KOLL.com.ph. yu can sell your items with FREE!!</li>

                        <li>
                            Click the
                            <b>Account</b>
                            tab, and to see your 
                            <b>Personal Information</b>.
                        </li>

                    </ul>

                    <!-- button continue -->
                    <a id="sbtBtn" class="btn btn-prim input-blue c-fff" target="" href="/">Continue</a>

                </div>
            </div>

        </div>

    </div>
</div>


@endsection