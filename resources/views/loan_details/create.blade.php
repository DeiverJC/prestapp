@extends('layouts.app')

@section('title', 'Create Loan Details')

@section('breadcrumb')
    <li class="breadcrumb-item ">
        <a href="{{ route('loanDetails.index') }}">
            Loan Details
        </a>
    </li>
    <li class="breadcrumb-item active">Register</li>
@endsection

@section('content')

    <div class="panel panel-info">
        <div class="panel-wrapper collapse in" aria-expanded="true">
            <div class="panel-body">
                {!! Form::open(['route' => 'loanDetails.store', 'class' => 'form-material']) !!}
                    <div class="form-body">
                        <h3 class="box-title">Loan Detail Info</h3>
                        <hr>
                        <div class="row">

                            @include('loan_details.fields')

                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
