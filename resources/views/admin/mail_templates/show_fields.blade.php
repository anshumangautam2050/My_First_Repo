<!-- Uid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('uid', 'Uid:') !!}
    <p>{!! $mailTemplates->uid !!}</p>
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $mailTemplates->name !!}</p>
</div>

<!-- Sender Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sender_name', 'Sender Name:') !!}
    <p>{!! $mailTemplates->sender_name !!}</p>
</div>

<!-- Sender Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sender_email', 'Sender Email:') !!}
    <p>{!! $mailTemplates->sender_email !!}</p>
</div>

<!-- Subject Field -->
<div class="form-group col-sm-12">
    {!! Form::label('subject', 'Subject:') !!}
    <p>{!! $mailTemplates->subject !!}</p>
</div>

<!-- Body Field -->
<div class="form-group col-sm-12">
    {!! Form::label('body', 'Body:') !!}
    <p>{!! $mailTemplates->body !!}</p>
</div>

<!-- Info Field -->
<div class="form-group col-sm-12">
    {!! Form::label('info', 'Info:') !!}
    <p>{!! $mailTemplates->info !!}</p>
</div>

<!-- System Field -->
<div class="form-group col-sm-6">
    {!! Form::label('system', 'System:') !!}
    <p>{!! $mailTemplates->system !!}</p>
</div>

