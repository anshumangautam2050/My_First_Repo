@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Mailing Lists
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mailingLists, ['route' => ['admin.mailingLists.update', $mailingLists->id], 'method' => 'patch']) !!}

                        @include('admin.mailing_lists.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection