<header id="widget-email-header" class="mb-sm">
    <h4>
        Reply
    </h4>
</header>

<div id="mailbox-content" class="widget-table-overflow">
    <div id="compose-view" class="compose-view">

        {!! Form::open(array('id' => 'email-compose', 'class' => 'form-email-compose',
                'action' => '',
                'method' => 'get')) !!}

            <div class="form-group">

                {!! Form::textarea('reply', null, ['class' => 'field form-control']) !!}

                <button class="btn mt-15 input-blue" type="submit">Send Reply</button>

            </div>

        {!! Form::close() !!}

    </div>

</div>