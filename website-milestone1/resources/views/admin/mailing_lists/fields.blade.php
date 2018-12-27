<!-- Uid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('uid', 'Uid:') !!}
    {!! Form::text('uid', null, ['class' => 'form-control', 'readonly']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Info Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('info', 'Info:') !!}
    {!! Form::textarea('info', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.mailingLists.index') !!}" class="btn btn-default">Cancel</a>
</div>

<!-- Public Field -->
<div class="form-group col-sm-6">
    {!! Form::label('public', 'Public:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('public', false) !!}
        {!! Form::checkbox('public', '1', null) !!} 
    </label>
</div>