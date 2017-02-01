{{-- modal view --}}
<div class="modal fade" id="repost-tem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Re-post your item</h4>
            </div>

            {!! Form::open() !!}

                <div class="modal-body">

                    <label>What are you selling?</label>

                    {!! Form::text('repostitem', '',
                        array('required',
                            'class' => 'form-control')) !!}

                </div>

                <div class="modal-body">

                    <label>Condition</label>

                    <select class="form-control">
                        <option>Brand new</option>
                        <option>2nd hand(Used)</option>
                    </select>

                </div>

                <div class="modal-body">

                    <label>Category</label>

                    <select class="form-control">
                        <option>Vehicles</option>
                        <option>Motorcycle</option>
                        <option>Fashion</option>
                        <option>Electronics</option>
                        <option>Sports</option>
                        <option>Toys</option>
                        <option>Events</option>
                        <option>Pets</option>
                    </select>

                </div>

                <div class="modal-body">

                    <label>Description</label>

                    {!! Form::textarea('repostdescription', '',
                        array('required',
                            'class' => 'form-control')) !!}

                </div>

                <div class="modal-body">

                    <label>Province</label>

                    <select class="form-control">
                        <option>Metro Manila</option>
                        <option>Abra</option>
                        <option>Agusan de Norte</option>
                    </select>

                </div>

                <div class="modal-body">

                    <label>City</label>

                    <select class="form-control">
                        <option>Caloocan</option>
                        <option>Las piñas</option>
                        <option>Makati</option>
                    </select>

                </div>

                <div class="modal-body">

                    <label>Mobile number</label>

                    {!! Form::text('repostnumber', '',
                        array('required',
                            'class' => 'form-control')) !!}

                </div>

            {!! Form::close() !!}

            <div class="modal-footer">
                <button type="button" class="btn btn-default grey" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary input-blue">Re-post</button>
            </div>
        </div>
    </div>
</div>