@extends('templates.veilingburo.master')

@section('title', 'Online veilingen voor kopers & verkopers')
@section('description', 'Veilingburo heeft de ambitie de perfecte schakel te zijn tussen koper en verkoper en dit op een betrouwbare, snelle en eenvoudige manier.')
@include('partials.commonpopup')
@section('content')

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="container">
<br><br><br><br>
    <div class="row">
        <div class="col-sm-12">
        @if (Session::has('message'))
	        <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
                <script>
                $(document).ready(function(){
                
                // to use this script you have to include partials.commonpopup.blade.php
                
                // Set title and content of the modal
                var titledata = 'Subscription';

                var contentdata = "<p class='alert alert-info'>{{Session::get('message')}}</p>";
                
                // Set time delay interval
                var popuptime = 2000;

                // append title in common modal
                $('#commonTitle').html(titledata);
                
                // append content data in coman modal
                $('#commonData').html(contentdata);
                
                setTimeout(function() {

                    $('#commonModal').modal();
                
                },popuptime);
                
                });
                </script>
        
        </div>
    </div>
</div>
@endsection
