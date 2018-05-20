@extends('layouts.app')

@section('title', 'Create Clients')

@section('breadcrumb')
    <li class="breadcrumb-item ">
        <a href="{{ route('clients.index') }}">
            Clients
        </a>
    </li>
    <li class="breadcrumb-item active">Register</li>
@endsection

@section('content')

    <div class="panel panel-info">
        <div class="panel-wrapper collapse in" aria-expanded="true">
            <div class="panel-body">
                {!! Form::open(['route' => 'clients.store', 'class' => 'form-material']) !!}
                    <div class="form-body">
                        <h3 class="box-title">Client Info</h3>
                        <hr>
                        <div class="row">

                            @include('clients.fields')

                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
