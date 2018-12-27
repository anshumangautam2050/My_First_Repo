@include('emails.header_email')
{{ $first_name }},
<p>Please <a href="{!! url('/admin/optinSubscribe/'.$id) !!}">click here to subscribe</a> newsletter.</p>
<p>Thank You</p>
@dd("check");
@include('emails.footer_email')