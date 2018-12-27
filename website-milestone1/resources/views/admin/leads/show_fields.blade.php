<div class="row">
    <!-- First Name Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('first_name', 'First Name:') !!}
        <p>{!! $leads->first_name !!}</p>
    </div>

    <!-- Last Name Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('last_name', 'Last Name:') !!}
        <p>{!! $leads->last_name !!}</p>
    </div> 
</div>



<div class="row">
      <!-- Company Field -->
      <div class="form-group col-sm-6">
          {!! Form::label('company', 'Company:') !!}
          <p>{!! $leads->company !!}</p>
      </div>

      <!-- Vat Number Field -->
      <div class="form-group col-sm-6">
          {!! Form::label('vat_number', 'Vat Number:') !!}
          <p>{!! $leads->vat_number !!}</p>
      </div>
</div>



<div class="row">
      <!-- Mobile Field -->
      <div class="form-group col-sm-6">
          {!! Form::label('mobile', 'Mobile:') !!}
          <p>{!! $leads->mobile !!}</p>
      </div>

      <!-- Email Field -->
      <div class="form-group col-sm-6">
          {!! Form::label('email', 'Email:') !!}
          <p>{!! $leads->email !!}</p>
      </div>  
</div>



<div class="row">
        <!-- Subject Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('subject', 'Subject:') !!}
            <p>{!! $leads->subject !!}</p>
        </div>

        <!-- Description Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('description', 'Description:') !!}
            <p>{!! $leads->description !!}</p>
        </div>

</div>

<div class="row">
        <!-- Amount Field -->
      <div class="form-group col-sm-6">
          {!! Form::label('amount', 'Amount:') !!}
          <p>{!! $leads->amount !!}</p>
      </div>

      <!-- Min Price Field -->
      <div class="form-group col-sm-6">
          {!! Form::label('min_price', 'Min Price:') !!}
          <p>{!! $leads->min_price !!}</p>
      </div>
</div>




