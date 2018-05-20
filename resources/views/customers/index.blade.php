@extends('layouts.app')

@section('title', 'Customers')

@section('breadcrumb')
    <li class="active">Customers</li>
@endsection

@section('content')

    @include('flash::message')

    <div class="white-box">
        <h1 class="box-title">
            <span class="text-uppercase">MANAGE Customers</span>
            <a class="btn btn-primary pull-right" style="margin-top: 7px;margin-bottom: 5px" href="{!! route('customers.create') !!}">Add New</a>
        </h1>
        <div class="table-responsive">
            @include('customers.table')
        </div>
        <div class="text-center">
            
        </div>
    </div>
@endsection

