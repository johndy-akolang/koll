<!DOCTYPE html>
<html>
<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- title -->
    <title>Welcome to KOLL.com.ph Sign in | Koll.com.ph New and Free Classified Ads and Buy and Sell Website Philippines</title>

    <!-- css style -->
    <link href="{{ asset('/css/global.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- javascript -->
    <script src="{{ asset('/js/vendor/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/class.js') }}" type="text/javascript"></script>

</head>

<body>
    <div class="login">

        <!-- logo -->
        <div class="logo-cont">
            <a href="/" title="Koll.com.ph"><img src="{{ asset('/images/logo-koll-beta.png') }}" alt="Koll.com.ph" title="Koll.com.ph"></a>
        </div>

        <div class="wrap">

            <!-- left side login container -->
            <div class="col_1_of_login span_1_of_login">
                <div class="login-title">

                    <!-- title login -->
                    <h4 class="title">Log in</h4>

                    <!-- login form -->
                    <div id="loginbox" class="loginbox">

                        {!! Form::open(array('url' => 'login', 'id' => 'login-form')) !!}

                            <!-- show error login failed -->
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    There were some problems with your input.<br><br/>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>

                                        @endforeach
                                    </ul>

                                </div>
                            @endif

                            <fieldset class="input">

                                <!-- login username -->
                                <p id="login-form-username">

                                    {!! Form::text('email', '',
                                        array('required',
                                                'id' => 'modlgn_username', 'class' => 'form-control width100 mt-mb-15',
                                                'placeholder' => 'Email')) !!}

                                    <p class="errors">{{ $errors->first('email') }}</p>

                                </p>

                                <!-- login password -->
                                <p id="login-form-password">

                                    {!! Form::password('password',
                                        array('required',
                                                'id' => 'modlgn_password', 'class' => 'form-control width100 mt-mb-15',
                                                'placeholder' => 'Password')) !!}

                                    <p class="errors">{{ $errors->first('password') }}</p>

                                </p>

                                <!-- login checkbox remember -->
                                <p id="login-form-password">

                                    {!! Form::checkbox('checkbox', '',
                                        array('name' => 'remember')) !!}
                                    Remember me

                                </p>

                                <!-- remeber passowrd -->
                                <div class="remember">
                                    <p id="login-form-remember">
                                        <label for="modlgn_remember"><a href="{{ url('/password/email') }}">Forgot Your Password ? </a></label>
                                    </p>
                                    <input type="submit" name="Submit" class="btn button" value="Login"><div class="clear"></div>
                                </div>

                            </fieldset>

                         {!! Form::close() !!}

                    </div>

                    <!-- login as facebook -->
                    <div class="social-login floatLeft">
                        <img class="cursor" src="{{ asset('/images/facebook-login-kolph.png') }}" alt="Login as Facebook" width="170" />
                        <img class="cursor" src="{{ asset('/images/google-plus-login-kolph.png') }}" alt="Login as Google Plus" width="170" />
                    </div>

                </div>
            </div>

            <!-- right side sign up -->
            <div class="col_1_of_login span_1_of_login">
                <div class="sd-rcc" style="width: 350px; margin-top: 12.5px;">
                    <h2 class="sd-txtA">New to Sell</h2>
                    <div class="sd-rts">
                        Get started now. It's fast and easy!
                    </div>

                    <!-- sign up button -->
                    <!-- {!! Form::submit('Sign Up',
                            array('name' => 'signup', 'class' => 'button btn input-green width100px', 'id' => 'signup-blue')) !!} -->

                    <a href="{{ asset('register') }}" class="btn-signup button btn input-green width100px">Sign up</a>

                </div>
            </div>
            <div class="clear"></div>

        </div>
    </div>

    <!-- login footer wrapper -->
    <div id="glbfooter" class="gh-w gh-flex" role="contentinfo">

        <!-- login footer bottom container -->
        <div id="gf-t-box">
            <table class="gf-t">
                <tbody>
                    <tr  valign="top">
                        <td class="gf-legal">
                            Copyright 2016 Applife Technology Corp. All Rights Reserved.
                            <a href="#">User Agreement</a>
                            ,
                            <a href="#">Privacy</a>
                            and
                            <a href="#">Cookies.</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>
