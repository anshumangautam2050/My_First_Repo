@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Mailing List Subscribers
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mailingListSubscribers, ['route' => ['admin.mailingListSubscribers.update', $mailingListSubscribers->id], 'method' => 'patch']) !!}

                        @include('admin.mailing_list_subscribers.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection