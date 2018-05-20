@extends('layouts.app')

@section('title', 'Edit Customers')

@section('breadcrumb')
    <li class="breadcrumb-item "><a href="{{ route('customers.index') }}">Customers</a></li>
    <li class="breadcrumb-item"><a href="{{ route('customers.show', $customer->id) }}">{{ $customer->id }}</a></li>
    <li class="breadcrumb-item active">Editar</li>
@endsection

@section('content')

    @include('adminlte-templates::common.errors')
   <div class="panel panel-info">
        <div class="panel-wrapper collapse in" aria-expanded="true">
            <div class="panel-body">
                    {!! Form::model($customer, ['route' => ['customers.update', $customer->id], 'method' => 'patch', 'class' => 'form-material']) !!}
                    <div class="form-body">
                        <h3 class="box-title">Customer Info</h3>
                        <hr>
                        <div class="row">

                            @include('customers.fields')

                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection