@extends('adminlte::page')
@section('title', trans('user.page.create'))
@section('content_header')
    <h1>{{ trans('user.page.create') }}</h1>
@stop
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/user.css') }}">
@stop
@section('content')
    @include('admin.notifies._message')
    <div class="col-md-6 col-md-offset-3">
        <div class="box box-primary">
            <div class="box-body">
                <form
                    action="{{ route('users.store') }}"
                    method="post"
                    enctype="multipart/form-data"
                >
                    @include('admin.users._form')
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-save"></i> {{ trans('user.control.button.save') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
@stop
@section('js')
    <script src="{{ asset('/js/upload_image.js') }}"></script>
@stop
