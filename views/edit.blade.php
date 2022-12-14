@extends('layouts.app')
<link rel="stylesheet" href="{{ url('vendor/laratwiliomulti/css/frontend.css') }}">
@section('content')
    <section class="content-header">
        <h1>LaraTwilioMulti Edit Account</h1>
    </section>
    <div class="content">
        @include('flash::message')
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::model($settings, ['route' => ['laratwiliomultisettings.update', $settings->id], 'method' => 'PATCH', 'files' => true]) !!}
                    @include('LaraTwilioMultiViews::fields', ['mode' => 'edit'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
