@extends('layouts.app')

@section('title', 'Create Loans')

@section('breadcrumb')
    <li class="breadcrumb-item ">
        <a href="{{ route('loans.index') }}">
            Loans
        </a>
    </li>
    <li class="breadcrumb-item active">Register</li>
@endsection

@section('content')

    <div class="panel panel-info">
        <div class="panel-wrapper collapse in" aria-expanded="true">
            <div class="panel-body">
                {!! Form::open(['route' => 'loans.store', 'class' => 'form-material']) !!}
                    <div class="form-body">
                        <h3 class="box-title">Loan Info</h3>
                        <hr>
                        <div class="row">

                            @include('loans.fields')

                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
