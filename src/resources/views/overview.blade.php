@extends('web::layouts.grids.4-4-4')

@section('title', trans('fitting::overview.page_title'))
@section('page_header', trans('fitting::overview.page_title'))

@section('center')

    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">{{ trans('fitting::about.functionality_title') }}</h3>
        </div>
        <div class="card-body">
            <p>
                {{ trans('fitting::about.functionality_body') }}
            </p>
        </div>
        @include('fitting::includes.maintainer')
    </div>
@stop
