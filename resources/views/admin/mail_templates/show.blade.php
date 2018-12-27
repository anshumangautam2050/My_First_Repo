@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Mail Templates
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('admin.mail_templates.show_fields')
                    <div class="col-sm-12">
                    <a href="{!! route('admin.mailTemplates.index') !!}" class="btn btn-default">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
