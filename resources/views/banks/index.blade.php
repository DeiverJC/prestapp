@extends('layouts.app')

@section('title', 'Banks')

@section('breadcrumb')
    <li class="active">Banks</li>
@endsection

@section('content')

    @include('flash::message')

    <div class="white-box">
        <h1 class="box-title">
            <span class="text-uppercase">MANAGE Banks</span>
            <a class="btn btn-primary pull-right" style="margin-top: 7px;margin-bottom: 5px" href="{!! route('banks.create') !!}">Add New</a>
        </h1>
        <div class="table-responsive">
            @include('banks.table')
        </div>
        <div class="text-center">
            
        </div>
    </div>
@endsection

