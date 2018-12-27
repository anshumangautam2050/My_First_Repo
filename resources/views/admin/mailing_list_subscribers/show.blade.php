@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Mailing List Subscribers
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('admin.mailing_list_subscribers.show_fields')
                    <div class="col-sm-12">
                    <a href="{!! route('admin.mailingListSubscribers.index') !!}" class="btn btn-default">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
