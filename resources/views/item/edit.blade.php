@extends('app')

@section('title')
    Update Item  {{ $item['slug'] }} | Koll.com.ph New and Free Classified Ads and Buy and Sell Website Philippines
@stop

@section('content')

<div class="sellitem">
    <div class="main">

        <div class="wrap">

            <!-- title update -->
            <h3>Update Item</h3>
            <div class="cont sell-item-cont bor-rad5 border1ccc pad10">

                <!-- form update item -->
                <form method="post" action='{{ route('user-items-edit', ['slug' => $item['slug']]) }}'>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="item_id" value="{{ $item['id'] }}{{ old('item_id') }}">

                    <fieldset class="clearfix">

                        <!-- title form label -->
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft">
                                <label>What are you selling?</label>
                            </div>
                        </div>

                        <!-- title form input -->
                        <div class="title-cont-input floatLeft">
                            <input type="text" name = "title" class="form-control" value="@if(!old('title')){{$item['title']}}@endif{{ old('title') }}"/>
                        </div>
                    </fieldset>

                    <fieldset class="clearfix mt-15 mb-15">

                        <!-- price form label -->
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft">
                                <label>Price</label>
                            </div>
                        </div>

                        <!-- price form input -->
                        <div class="title-cont-input floatLeft">
                            <input type="text" id="price" name="price" class="form-control" value="@if(!old('price')){{$item['price']}}@endif{{ old('price') }}"/>
                        </div>
                    </fieldset>

                    <!-- select condition container -->
                    <fieldset class="clearfix">

                        <!-- condition label -->
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft">
                                <label>Condition</label>
                            </div>
                        </div>

                        <!-- select condition -->
                        <div class="title-cont-input floatLeft">

                            {!! Form::select('condition',
                                (['0' => 'Select'] + $conditions),
                                $item['condition'],
                                ['class' => 'form-control']) !!}

                        </div>

                    </fieldset>

                    <!-- selecty category container -->
                    <fieldset class="clearfix mt-15 border-b mb-15 pad-b-10">

                        <!-- category label -->
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft">
                                <label>Choose a Category</label>
                            </div>
                        </div>

                        <!-- select category -->
                        <div class="title-cont-input floatLeft">

                            {!! Form::select('category',
                                (['0' => 'Select'] + $categories),
                                $item['category'],
                                ['class' => 'form-control']) !!}

                        </div>
                    </fieldset>

                    <!-- item form description container -->
                    <fieldset class="clearfix">

                        <!-- description form label -->
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft">
                                <label>Description </label>
                            </div>
                        </div>

                        <!-- text area description -->
                        <div class="title-cont-input floatLeft">

                            <textarea id="description-item" name="description" class="form-control" rows="10" cols="10">
                                @if(!old('description'))
                                {!! $item['description'] !!}
                                @endif
                                {!! old('description') !!}
                            </textarea>

                            <p class="desc c-aaa">
                                <small>
                                    <b id="add-title-counter" class="counter-placeholder" data-for-id="add-title">700</b>
                                    characters left
                                </small>
                            </p>
                        </div>
                    </fieldset>

                    <!-- item form upload photos -->
                    <fieldset class="clearfix border-b mb-15 pad-b-10">

                        <!-- update images form label -->
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft">
                                <label>Upload photos</label>
                            </div>
                        </div>

                        <!-- update upload images input -->
                        <div class="title-cont-input floatLeft">
                            {!! Form::file('images', null) !!}

                            <div class="mt-15">
                                <img src="{{ asset($item['images']) }}" height="150" />
                            </div>
                        </div>
                    </fieldset>

                    <!-- select province container -->
                    <fieldset class="clearfix">

                        <!-- select form label province -->
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft">
                                <label>Province</label>
                            </div>
                        </div>

                        <!-- select province -->
                        <div class="title-cont-input floatLeft">

                            {!! Form::select('province',
                                (['0' => 'Select'] + $provinces),
                                $item['province'],
                                ['class' => 'form-control']) !!}

                        </div>
                    </fieldset>

                    <!-- select city container -->
                    <fieldset class="clearfix">

                        <!-- select city label -->
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft">
                                <label>City</label>
                            </div>
                        </div>

                        <!-- select city input -->
                        <div class="title-cont-input floatLeft">

                            {!! Form::select('city',
                                (['0' => 'Select'] + $cities),
                                $item['city'],
                                ['class' => 'form-control']) !!}

                        </div>
                    </fieldset>

                    <!-- mobile number container -->
                    <fieldset class="clearfix border-b mb-15 pad-b-10">

                        <!-- mobile form label -->
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft">
                                <label>Business Mobile number</label>
                            </div>
                        </div>

                        <!-- title form input -->
                        <div class="title-cont-input floatLeft">
                            <input type="text" name="mobile" class="form-control" value="@if(!old('mobile')){{$item['mobile']}}@endif{{ old('mobile') }}"/>
                        </div>
                    </fieldset>

                    <!-- submit update button container -->
                    <fieldset class="clearfix">
                        <div class="btn_form floatRight">

                            {!! Form::submit('Update Item', ['class' => 'btn btn-primary input-green floatRight']) !!}

                        </div>
                    </fieldset>
                </form>

            </div>
        </div>
    </div>
</div>


@endsection
