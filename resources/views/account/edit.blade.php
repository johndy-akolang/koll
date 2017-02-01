@extends('app')

@section('title')
    Edit My Profile | Koll.com.ph New and Free Classified Ads and Buy and Sell Website Philippines
@stop

@section('content')
  <div class="container">
      <h1>Edit Profile</h1>
    	<hr>
      <div class="row">
          {!! Form::model($user, array('url' => array('account/edit', $user->id), 'method' => 'POST', 'class' => 'form-horinzontal', 'files' => true)) !!}
              <!-- left column -->
              <div class="col-md-3">
                  <div class="text-center">
                      <img src="{{ asset(Auth::user()->profilepic) }}" class="avatar img-circle" alt="avatar">
                      <h6>Upload a different photo...</h6>

                      <!-- <input class="form-control" type="file"> -->
                      {!! Form::file('profilepic', null) !!}

                  </div>
              </div>
        
              <!-- edit form column -->
              <div class="col-md-9 personal-info">
                  <h3>Personal info</h3>

                  <!-- <form class="form-horizontal" role="form"> -->
                  

                  <div class="form-group clearfix">
                      <label class="col-lg-3 control-label">First name:</label>
                      <div class="col-lg-8">
                          <!-- <input class="form-control" type="text" value="{{ old('first_name') }}" name="first_name" id="first_name"> -->
                          {!! Form::text('first_name', Input::old('first_name'), array('class' => 'form-control')) !!}
                      </div>
                  </div>

                  <div class="form-group clearfix">
                      <label class="col-lg-3 control-label">Last name:</label>
                      <div class="col-lg-8">
                        <!-- <input class="form-control" type="text"> -->
                        {!! Form::text('last_name', Input::old('last_name'), array('class' => 'form-control')) !!}
                      </div>
                  </div>

                  <div class="form-group clearfix">
                      <label class="col-lg-3 control-label">Email:</label>
                      <div class="col-lg-8">
                        <!-- <input class="form-control" value="" type="text"> -->
                        {!! Form::text('email', Input::old('email'), array('class' => 'form-control')) !!}
                      </div>
                  </div>

                  <div class="form-group clearfix">
                      <label class="col-lg-3 control-label">Address:</label>
                      <div class="col-lg-8">
                        <!-- <input class="form-control" type="text"> -->
                        {!! Form::text('useraddress', Input::old('useraddress'), array('class' => 'form-control')) !!}
                      </div>
                  </div>

                  <div class="form-group clearfix">
                      <label class="col-lg-3 control-label">Mobile:</label>
                      <div class="col-lg-8">
                        <!-- <input class="form-control" type="text"> -->
                        {!! Form::text('mobile', Input::old('mobile'), array('class' => 'form-control')) !!}
                      </div>
                  </div>

                  <div class="form-group clearfix">
                      <label class="col-md-3 control-label">Company Name:</label>
                      <div class="col-md-8">
                          <!-- <input class="form-control" type="text"> -->
                          {!! Form::text('companyname', Input::old('companyname'), array('class' => 'form-control')) !!}
                      </div>
                  </div>

                  <div class="form-group clearfix">
                      <label class="col-md-3 control-label">Company Address:</label>
                      <div class="col-md-8">
                          <!-- <input class="form-control" type="text"> -->
                          {!! Form::text('companyaddress', Input::old('companyaddress'), array('class' => 'form-control')) !!}
                      </div>
                  </div>

                  <div class="form-group clearfix">
                      <label class="col-md-3 control-label">Company Tel. No.:</label>
                      <div class="col-md-8">
                          <!-- <input class="form-control" type="text"> -->
                          {!! Form::text('companynumber', Input::old('companynumber'), array('class' => 'form-control')) !!}
                      </div>
                  </div>

                  <div class="form-group clearfix">
                      <label class="col-md-3 control-label"></label>
                      <div class="col-md-8">
                          <!-- <input class="c-fff btn input-green button" value="Save Changes" type="button"> -->
                          {!! Form::submit('Save Changes', array('class' => 'c-fff btn input-green button')) !!}
                          <span></span>
                          <!-- <input class="c-fff btn btn-default" value="Cancel" type="reset"> -->
                      </div>
                  </div>
                  
                <!-- </form> -->
              </div>
          {!! Form::close() !!}
      </div>
  </div>
<hr>
@endsection