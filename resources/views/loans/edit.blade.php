@extends('layouts.app')

@section('title', 'Edit Loans')

@section('breadcrumb')
    <li class="breadcrumb-item "><a href="{{ route('loans.index') }}">Loans</a></li>
    <li class="breadcrumb-item"><a href="{{ route('loans.show', $loan->id) }}">{{ $loan->id }}</a></li>
    <li class="breadcrumb-item active">Editar</li>
@endsection

@section('content')

    @include('adminlte-templates::common.errors')
   <div class="panel panel-info">
        <div class="panel-wrapper collapse in" aria-expanded="true">
            <div class="panel-body">
                    {!! Form::model($loan, ['route' => ['loans.update', $loan->id], 'method' => 'patch', 'class' => 'form-material']) !!}
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