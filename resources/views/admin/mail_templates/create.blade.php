@extends('layouts.app')

@section('content')
@section('scripts')
<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'body' );
    CKEDITOR.replace( 'info' );
</script>
@endsection
    <section class="content-header">
        <h1>
            Mail Templates
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'admin.mailTemplates.store']) !!}

                        @include('admin.mail_templates.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
