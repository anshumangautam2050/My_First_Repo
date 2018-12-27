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

<!-- Sender Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sender_name', 'Sender Name:') !!}
    {!! Form::text('sender_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Sender Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sender_email', 'Sender Email:') !!}
    {!! Form::text('sender_email', null, ['class' => 'form-control']) !!}
</div>

<!-- Subject Field -->
<div class="form-group col-sm-12">
    {!! Form::label('subject', 'Subject:') !!}
    {!! Form::text('subject', null, ['class' => 'form-control']) !!}
</div>

<!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<!-- Info Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('info', 'Info:') !!}
    {!! Form::textarea('info', null, ['class' => 'form-control']) !!}
</div>
<!-- System Field -->
<div class="form-group col-sm-6">
    {!! Form::label('system', 'System:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('system', false) !!}
        {!! Form::checkbox('system', '1', null) !!} 
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.mailTemplates.index') !!}" class="btn btn-default">Cancel</a>
</div>
