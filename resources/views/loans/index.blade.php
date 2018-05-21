@extends('layouts.app')

@section('title', 'Loans')

@section('breadcrumb')
    <li class="active">Loans</li>
@endsection

@section('content')

    @include('flash::message')

    <div class="white-box">
        <h1 class="box-title">
            <span class="text-uppercase">MANAGE Loans</span>
            <a class="btn btn-primary pull-right" style="margin-top: 7px;margin-bottom: 5px" href="{!! route('loans.create') !!}">Add New</a>
        </h1>
        <div class="table-responsive">
            @include('loans.table')
        </div>
        <div class="text-center">
            
        </div>
    </div>
@endsection

