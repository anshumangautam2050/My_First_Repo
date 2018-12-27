<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $leadPictures->id !!}</p>
</div>

<!-- Lead Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lead_id', 'Lead Id:') !!}
    <p>{!! $leadPictures->lead_id !!}</p>
</div>

<!-- Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('url', 'Url:') !!}
    <p>{!! $leadPictures->url !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $leadPictures->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $leadPictures->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $leadPictures->deleted_at !!}</p>
</div>

