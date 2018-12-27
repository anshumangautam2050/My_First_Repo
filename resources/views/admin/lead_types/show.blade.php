@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Lead Types
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('admin.lead_types.show_fields')
                    <div class="col-sm-12">
                    <a href="{!! route('admin.leadTypes.index') !!}" class="btn btn-default">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
