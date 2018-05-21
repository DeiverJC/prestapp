@extends('layouts.app')

@section('title', 'Loan Details')

@section('breadcrumb')
    <li class="active">Loan Details</li>
@endsection

@section('content')

    @include('flash::message')

    <div class="white-box">
        <h1 class="box-title">
            <span class="text-uppercase">MANAGE Loan Details</span>
            <a class="btn btn-primary pull-right" style="margin-top: 7px;margin-bottom: 5px" href="{!! route('loanDetails.create') !!}">Add New</a>
        </h1>
        <div class="table-responsive">
            @include('loan_details.table')
        </div>
        <div class="text-center">
            
        </div>
    </div>
@endsection

