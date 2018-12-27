@component('mail::message')
# Lead Created

Here comes the email for sending to all admins

@if($leads->is_company)
Company: {{$leads->company}}<br>
VAT Number: {{$leads->vat_number}}<br>
@endif
First Name: {{$leads->first_name}}<br>
Last Name: {{$leads->last_name}}<br>
Email: {{$leads->email}}<br>
Mobile: {{$leads->mobile}}<br>
Amount: {{$leads->amount}}<br>
Min Price: {{$leads->min_price}}<br>
Subject: {{$leads->subject}}<br>
Description: {{$leads->description}}

@component('mail::button', ['url' => route('admin.leads.show',$leads->id)])
View Lead
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent