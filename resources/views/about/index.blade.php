@extends('app')

@section('title')
    About us | New and Free Classified Ads and Buy and Sell Website Philippines
@stop

@section('content')

<div class="about">
    <div class="main">

        <div class="wrap pad-top-bottom-25">

            {{-- title --}}
            <h2 class="head">About Koll.com.ph</h2>
            <p>
                Koll.com.ph is the only 100% Filipino-owned operated online marketplace. We provide local business an online storefront where our fellow Pinoys can buy
                and sell their goods - simple, fast and free. From the lates gadgets, home furniture, books beauty products, clothes, shoes and bags, to real estate,
                cars, and various business services, Koll.com.php is your go-to site to easily set up shop and get free, continuous advertising to go.
            </p>

            <h2 class="head">Why sell on Koll.com.ph?</h2>
            <p>
                Create and re-create your business the Koll.com.ph way. Koll.com.ph is a strong, measurable and cost-effective way in bringing customers and sales to your business. We use experienced,
                perceptive marketing in building a strong presence online which brings you guaranteed substantial results. As seller, you don't just need new customers, you need repeat buyers
                looking to spend more on your business. We can help you with that.
            </p>

        </div>

        <div class="work-section pad-top-bottom-25 mb-25">
            <div class="wrap">
                <h2 class="head">How It Works</h2>
                    <div class="work-section-head text-center">
                        <p>Fast, easy and free to post an ad and you will find, what you are looking for.</p>
                    </div>
                    <div class="work-section-grids text-center">
                        <div class="col-md-3 work-section-grid">
                            <i class="fa fa-pencil-square-o"></i>
                            <h4>Sell your Ads</h4>
                            <span class="arrow1"><img src="{{ asset('images/arrow1.png') }}" alt="" /></span>
                        </div>
                        <div class="col-md-3 work-section-grid">
                            <i class="fa fa-eye"></i>
                            <h4>Find an item</h4>
                            <span class="arrow2"><img src="{{ asset('images/arrow2.png') }}" alt="" /></span>
                        </div>
                        <div class="col-md-3 work-section-grid">
                            <i class="fa fa-phone"></i>
                            <h4>contact the seller</h4>
                            <span class="arrow1"><img src="{{ asset('images/arrow1.png') }}" alt="" /></span>
                        </div>
                        <div class="col-md-3 work-section-grid">
                            <i class="fa fa-money"></i>
                            <h4>make transactions</h4>
                        </div>
                    </div>
            </div>
        </div>

    </div>
</div>

@endsection