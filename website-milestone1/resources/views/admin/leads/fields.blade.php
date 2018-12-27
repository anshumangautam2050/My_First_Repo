<!-- Is Company Field -->
<div class="form-group col-sm-6">
  {!! Form::label('is_company', trans('labels.company')) !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_company', false) !!}
        {!! Form::checkbox('is_company', '1', null) !!}
    </label>
</div>

<!-- Is Person Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_person', 'Is Person:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_person', false) !!}
        {!! Form::checkbox('is_person', '1', null) !!}
    </label>
</div>

<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Company Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company', 'Company:') !!}
    {!! Form::text('company', null, ['class' => 'form-control']) !!}
</div>

<!-- Vat Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vat_number', 'Vat Number:') !!}
    {!! Form::text('vat_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Mobile Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mobile', 'Mobile:') !!}
    {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Subject Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('subject', 'Subject:') !!}
    {!! Form::text('subject', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::text('amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Min Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('min_price', 'Min Price:') !!}
    {!! Form::text('min_price', null, ['class' => 'form-control']) !!}
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.leads.index') !!}" class="btn btn-default">Cancel</a>
</div>
