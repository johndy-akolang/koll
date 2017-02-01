{{-- modal view --}}
<div class="modal fade" id="boostads" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Boost item</h4>
            </div>

            {!! Form::open() !!}

                <div class="modal-body">

                    <label>Credits</label>

                    <select class="form-control">
                        {{--<option>1 credit</option>
                        <option>2 credits</option>
                        <option>3 credits</option>
                        <option>4 credits</option>
                        <option>5 credits</option>
                        <option>6 credits</option>
                        <option>7 credits</option>
                        <option>8 credits</option>
                        <option>9 credits</option>--}}
                        <option>10 credits</option>
                    </select>

                </div>

                <div class="modal-body">

                    <label>Durations</label>

                    <select class="form-control">
                        <option>1 month</option>
                        {{--<option>2 days</option>
                        <option>3 days</option>
                        <option>4 days</option>
                        <option>5 days</option>
                        <option>6 days</option>
                        <option>7 days</option>--}}
                    </select>

                </div>

                <div class="modal-header border-t mt-5">
                    <h4>Name and Address for you official receipt</h4>
                </div>

                <div class="modal-body">

                    <label>Name</label>

                    {!! Form::text('receiptname', '',
                        array('required',
                            'class' => 'form-control')) !!}

                </div>

                <div class="modal-body">

                    <label>Address</label>

                    {!! Form::text('receiptaddress', '',
                        array('required',
                            'class' => 'form-control')) !!}

                </div>

            {!! Form::close() !!}

            <div class="modal-footer">
                <button type="button" class="btn btn-default grey" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary input-blue" data-toggle="modal" data-target="#paymentmethod">Boost Ads</button>
            </div>
        </div>
    </div>


    {{-- payment method template modal --}}
    <div class="modal fade" id="paymentmethod" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                {{-- header payment method --}}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Payment method</h4>
                </div>

                {{-- body payment method --}}
                <div class="modal-body">
                    <span>Add a new payment method to your kol.ph boost ads account.</span>
                </div>

                {{-- credit card or debit card --}}
                <div class="modal-body">
                    <div class="credit-card-cont">
                        credit card or debit card
                    </div>
                </div>

                {{-- paypal --}}
                <div class="modal-body">
                    <div class="paypal-cont">
                        paypal
                    </div>
                </div>

                {{-- footer payment method --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-default grey" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary input-blue">Continue</button>
                </div>

            </div>
        </div>
    </div>

</div>