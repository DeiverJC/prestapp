@extends('layouts.app')

@section('title', 'Companies')

@section('breadcrumb')
    <li class="active">Companies</li>
@endsection

@section('content')

    @include('flash::message')

    <div class="white-box">
        <h1 class="box-title">
            <span class="text-uppercase">MANAGE Companies</span>
            <a class="btn btn-primary pull-right" style="margin-top: 7px;margin-bottom: 5px" href="{!! route('companies.create') !!}">Add New</a>
        </h1>
        <div class="table-responsive">
            @include('companies.table')
        </div>
        <div class="text-center">
            
        </div>
    </div>
@endsection

