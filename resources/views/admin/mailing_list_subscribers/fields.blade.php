<!-- List Uid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('list_uid', 'List Uid:') !!}
    {!! Form::text('list_uid', $uid, ['class' => 'form-control', 'readonly'] ) !!}
</div>
{!! Form::hidden('list_uid', $uid, ['class' => 'form-control'] ) !!}

<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Opt In Field -->
<div class="form-group col-sm-6">
    {!! Form::label('opt_in', 'Opt In:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('opt_in', false) !!}
        {!! Form::checkbox('opt_in', '1', null) !!} 
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.mailingListSubscribers.index') !!}" class="btn btn-default">Cancel</a>
</div>
