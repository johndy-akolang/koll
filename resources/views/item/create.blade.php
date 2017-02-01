@extends('app')

@section('title')
    Sell your item now | Koll.com.ph New and Free Classified Ads and Buy and Sell Website Philippines
@stop

@section('content')

<div class="sellitem">
    <div class="main">

        <div class="wrap">
            <div class="cont sell-item-cont bor-rad5 border1ccc pad10">

                <!-- form sell item -->
                {!! Form::open(['url' => route('user-items-create'), 'method' => 'POST', 'files' => true]) !!}

                    <!-- sell item title -->
                    <div class="sellitem-title">
                        <h4 class="title">Sell item now</h4>
                    </div>

                    <fieldset class="clearfix">

                        <!-- title form label -->
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft">
                                <label>What are you selling?
                                    <span class="cff0">*</span>
                                </label>
                            </div>
                        </div>

                        <!-- title form input -->
                        <div class="title-cont-input floatLeft">

                            {!! Form::text('title', '',
                                array('required',
                                    'id' => 'title', 'name' => 'title',
                                    'class' => 'form-control')) !!}

                            <p class="desc c-aaa">
                                <small>
                                    <b id="add-title-counter" class="counter-placeholder" data-for-id="add-title">70</b>
                                    characters left
                                </small>
                            </p>
                        </div>
                    </fieldset>

                    <fieldset class="clearfix mt-15 mb-15">

                        <!-- price form label -->
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft">
                                <label>Price
                                    <span class="cff0">*</span>
                                </label>
                            </div>
                        </div>

                        <!-- price form input -->
                        <div class="title-cont-input floatLeft">

                            {!! Form::text('price', '',
                                array('required',
                                    'id' => 'price', 'name' => 'price',
                                    'class' => 'form-control price-input')) !!}

                        </div>

                    </fieldset>

                    <!-- select condition container -->
                    <fieldset class="clearfix">

                        <!-- select condition form label -->
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft">
                                <label>Condition
                                    <span class="cff0">*</span>
                                </label>
                            </div>
                        </div>

                        <!-- select condition form input -->
                        <div class="title-cont-input floatLeft">
                            {!! Form::select('condition',
                                ['0' => 'Select'] + $conditions,
                                null,
                                ['class' => 'form-control']) !!}

                        </div>
                    </fieldset>

                    <!-- selecty category container -->
                    <fieldset class="clearfix mt-15 border-b mb-15 pad-b-10">

                        <!-- select category form label -->
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft">
                                <label>Choose a Category
                                    <span class="cff0">*</span>
                                </label>
                            </div>
                        </div>

                        <!-- select category form input-->
                        <div class="title-cont-input floatLeft">

                            {!! Form::select('category',
                                (['0' => 'Select'] + $categories),
                                null,
                                ['class' => 'form-control']) !!}

                        </div>
                    </fieldset>

                    <!-- item form description container -->
                    <fieldset class="clearfix">

                        <!-- item description form label -->
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft">
                                <label>Description
                                    <span class="cff0">*</span>
                                </label>
                            </div>
                        </div>

                        <!-- text area description -->
                        <div class="title-cont-input floatLeft">

                            {!! Form::textarea('description', '',
                                array('required',
                                    'id' => 'description-item',
                                    'class' => 'form-control')) !!}

                            <p class="desc c-aaa">
                                <small>
                                    <b id="add-title-counter" class="counter-placeholder" data-for-id="add-title">700</b>
                                    characters left
                                </small>
                            </p>
                        </div>
                    </fieldset>

                    <!-- item fomr upload photos container -->
                    <fieldset class="clearfix border-b mb-15 pad-b-10">

                        <!-- primary images item form label -->
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft">
                                <label>Upload photos</label>
                            </div>
                        </div>

                        <!-- upload item primary images -->
                        <div class="title-cont-input floatLeft">

                            {!! Form::file('images', null) !!}

                        </div>
                    </fieldset>

                    <!-- select province container -->
                    <fieldset class="clearfix">

                        <!-- select province form label -->
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft">
                                <label>Province
                                    <span class="cff0">*</span>
                                </label>
                            </div>
                        </div>

                        <!-- select province form input -->
                        <div class="title-cont-input floatLeft">

                            {!! Form::select('province',
                                (['0' => 'Select'] + $provinces),
                                null,
                                ['class' => 'form-control']) !!}

                        </div>
                    </fieldset>

                    <!-- select city container -->
                    <fieldset class="clearfix">

                        <!-- select city form label -->
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft">
                                <label>City
                                    <span class="cff0">*</span>
                                </label>
                            </div>
                        </div>

                        <!-- select city form input -->
                        <div class="title-cont-input floatLeft">

                            {!! Form::select('city',
                                (['0' => 'Select'] + $cities),
                                null,
                                ['class' => 'form-control']) !!}

                        </div>
                    </fieldset>

                    <!-- mobile number -->
                    <fieldset class="clearfix border-b mb-15 pad-b-10">

                        <!-- mobile form label -->
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft">
                                <label>Business Mobile number
                                    <span class="cff0">*</span>
                                </label>
                            </div>
                        </div>

                        <!-- mobile form input -->
                        <div class="title-cont-input floatLeft">

                            {!! Form::text('mobile', null,
                                array('required',
                                    'id' => 'mobile', 'name' => 'mobile',
                                    'class' => 'form-control mb-15')) !!}

                        </div>
                    </fieldset>

                    <!-- item submit button form -->
                    <fieldset class="clearfix">
                        <div class="btn_form floatLeft">

                            {{-- submit button for ads --}}

                            {!! Form::submit('Submit Ads', array('class' => 'btn button input-green floatRight c-fff')) !!}

                        </div>
                    </fieldset>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>

@endsection
