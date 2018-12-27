@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Lead Pictures
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($leadPictures, ['route' => ['admin.leadPictures.update', $leadPictures->id], 'method' => 'patch']) !!}

                        @include('admin.lead_pictures.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection