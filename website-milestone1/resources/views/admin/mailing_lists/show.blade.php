@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Mailing Lists
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('admin.mailing_lists.show_fields')
                    <div class="col-sm-12">
                    <a href="{!! route('admin.mailingLists.index') !!}" class="btn btn-default">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
