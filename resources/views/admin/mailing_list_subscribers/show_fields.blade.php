<!-- List Uid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('list_uid', 'List Uid:') !!}
    <p>{!! $mailingListSubscribers->list_uid !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $mailingListSubscribers->created_at !!}</p>
</div>

<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    <p>{!! $mailingListSubscribers->first_name !!}</p>
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $mailingListSubscribers->email !!}</p>
</div>
<!-- Opt In Field -->
<div class="form-group col-sm-6">
    {!! Form::label('opt_in', 'Opt In:') !!}
    <p>{!! $mailingListSubscribers->opt_in !!}</p>
</div>

