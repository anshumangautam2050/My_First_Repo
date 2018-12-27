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

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Mobile Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mobile', 'Mobile:') !!}
    {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
</div>


<!-- User Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_number', 'User Number:') !!}
    {!! Form::text('user_number', null, ['class' => 'form-control', 'readonly']) !!}
</div>


<!-- Id Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_number', 'Id Number:') !!}
    {!! Form::text('id_number', null, ['class' => 'form-control']) !!}
</div>



<!-- Is Admin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_admin', 'Is Admin:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_admin', false) !!}
        {!! Form::checkbox('is_admin', '1', null) !!}
    </label>
</div>

<!-- Is Freq Seller Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_freq_seller', 'Is Freq Seller:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_freq_seller', false) !!}
        {!! Form::checkbox('is_freq_seller', '1', null) !!}
    </label>
</div>

<!-- Is Curator Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_curator', 'Is Curator:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_curator', false) !!}
        {!! Form::checkbox('is_curator', '1', null) !!}
    </label>
</div>

<!-- Is Client Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_client', 'Is Client:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_client', false) !!}
        {!! Form::checkbox('is_client', '1', null) !!}
    </label>
</div>

<!-- System Mail Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_system_mail', 'System Mail:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_system_mail', false) !!}
        {!! Form::checkbox('is_system_mail', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.users.index') !!}" class="btn btn-default">Cancel</a>
</div>
