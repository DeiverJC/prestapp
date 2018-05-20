@extends('layouts.app')

@section('title', 'Bancs')

@section('breadcrumb')
    <li class="active">Bancs</li>
@endsection

@section('content')

    @include('flash::message')

    <div class="white-box">
        <h1 class="box-title">
            <span class="text-uppercase">MANAGE Bancs</span>
            <a class="btn btn-primary pull-right" style="margin-top: 7px;margin-bottom: 5px" href="{!! route('bancs.create') !!}">Add New</a>
        </h1>
        <div class="table-responsive">
            @include('bancs.table')
        </div>
        <div class="text-center">
            
        </div>
    </div>
@endsection

