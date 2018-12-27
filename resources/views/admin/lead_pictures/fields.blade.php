<!-- Lead Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lead_id', 'Lead Id:') !!}
    {!! Form::number('lead_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('url', 'Url:') !!}
    {!! Form::text('url', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.leadPictures.index') !!}" class="btn btn-default">Cancel</a>
</div>
