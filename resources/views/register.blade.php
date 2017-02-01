<!DOCTYPE html>
<html>
<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- title -->
    <title>Get started with KOLL.com.ph | Koll.com.ph New and Free Classified Ads and Buy and Sell Website Philippines</title>

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

    <div class="register_account">

        <!-- logo -->
        <div class="logo-cont mb-20">

            <a href="/" title="Koll.com.ph"><img src="{{ asset('/images/logo-koll-beta.png') }}" alt="Koll.com.ph" title="Koll.com.ph"></a>

            <!-- sub title -->
            <span>Get started with KOLL.com.ph</span>

        </div>

        <!-- register label  -->
        <div class="reg-label">
            <label>Create your personal account or start business account</label>
        </div>

        <div class="wrap">

            <!-- resgiter title -->
            <h4 class="title">Create an Account</h4>

            <!-- show error when register failed -->
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

            <div class="col_1_of_2 span_1_of_2 ml-0">

                <!-- register form -->
                {!! Form::open(array('url' => 'register')) !!}

                    <!-- form firstname -->
                    <div>
                        {!! Form::text('firstname', '',
                            array('required',
                                    'id' => 'firstname', 'name' => 'firstname',
                                    'class' => 'form-control c-999 mt-mb-15',
                                    'placeholder' => 'First Name')) !!}

                    </div>

                    <!-- form lastname -->
                    <div>
                        {!! Form::text('lastname', '',
                            array('required',
                                    'id' => 'lastname', 'name' => 'lastname',
                                    'class' => 'form-control c-999 mt-mb-15',
                                    'placeholder' => 'Last Name')) !!}

                    </div>

                    <!-- form mobile -->
                    <div>
                        {!! Form::text('mobile', '',
                            array('required',
                                    'id' => 'mobile', 'name' => 'mobile',
                                    'class' => 'form-control c-999 mt-mb-15',
                                    'placeholder' => 'Mobile Number')) !!}

                    </div>

                    <!-- form email -->
                    <div>
                        {!! Form::email('email', '',
                            array('required',
                                'id' => 'email', 'name' => 'email',
                                'class' => 'form-control mt-mb-15',
                                'placeholder' => 'Email')) !!}

                    </div>

                    <!-- form password -->
                    <div>
                        {!! Form::password('password',
                            array('required',
                                'id' => 'password', 'name' => 'password',
                                'class' => 'form-control mt-mb-15',
                                'placeholder' => 'Password')) !!}

                    </div>

                    <!-- form cpassword -->
                    <div>
                        {!! Form::password('password_confirmation',
                            array('required',
                                'id' => 'password_confirmation', 'name' => 'password_confirmation',
                                'class' => 'form-control mt-mb-15',
                                'placeholder' => 'Confirm Password')) !!}

                    </div>

                    <!-- form submit button -->
                    <div class="clear floatLeft mt-10">

                        {!! Form::submit('Create Account',
                            array('class' => 'grey btn')) !!}

                        <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a></p>

                    </div>

                {!! Form::close() !!}

            </div>

            <!-- container for login / signin -->
            <div class="col_1_of_2 span_1_of_2">
                <div class="sd-rcc" style="width: 350px; margin-top: 59.5px;">
                    <div class="sd-rts">
                        Already have an account?
                    </div>

                    <!-- Button for Login -->
                    <!-- {!! Form::submit('Log in',
                        array('class' => 'btn button input-green width100px', 'name' => 'Login', 'id' => 'signin-blue')) !!} -->

                    <a href="{{ asset('login') }}" class="btn-login btn button input-green width100px">Log in</a>

                </div>
            </div>

        </div>
    </div>

    <!-- register footer wrapper -->
    <div id="glbfooter" class="gh-w gh-flex" role="contentinfo">

        <!-- register footer bottom container -->
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

























































