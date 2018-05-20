@extends('layouts.app')

@section('title', 'Clients')

@section('breadcrumb')
    <li class="active">Clients</li>
@endsection

@section('content')

    @include('flash::message')

    <div class="white-box">
        <h1 class="box-title">
            <span class="text-uppercase">MANAGE Clients</span>
            <a class="btn btn-primary pull-right" style="margin-top: 7px;margin-bottom: 5px" href="{!! route('clients.create') !!}">Add New</a>
        </h1>
        <div class="table-responsive">
            @include('clients.table')
        </div>
        <div class="text-center">
            
        </div>
    </div>
@endsection

