<!-- Uid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('uid', 'Uid:') !!}
    <p>{!! $mailingLists->uid !!}</p>
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $mailingLists->name !!}</p>
</div>

<!-- Info Field -->
<div class="form-group col-sm-12">
    {!! Form::label('info', 'Info:') !!}
    <p>{!! $mailingLists->info !!}</p>
</div>

<!-- Public Field -->
<div class="form-group col-sm-6">
    {!! Form::label('public', 'Public:') !!}
    <p>{!! $mailingLists->public !!}</p>
</div>