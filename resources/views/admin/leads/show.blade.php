@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Leads
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('admin.leads.show_fields')
                    <div class="col-sm-12">
                    <a href="{!! route('admin.leads.index') !!}" class="btn btn-default">Back</a>
                    </div>
                </div>
            </div>
        </div>
      
         <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                  <h3>
                    Pictures
                  </h3>
                  <div class="row">
                    @foreach ($leads->lead_pictures as $picture)
                    <div class="col-sm-3">
                      <img src="{{asset($picture->url)}}" width="90%">
                    </div>
                    @endforeach
                  </div>
                  <p>
                    
                  </p>
                   <div class="col-sm-12">
                      <a href="{!! route('admin.leads.index') !!}" class="btn btn-default">Back</a>
                  </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
