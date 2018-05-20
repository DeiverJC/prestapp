@extends('layouts.app')

@section('title', 'Edit Banks')

@section('breadcrumb')
    <li class="breadcrumb-item "><a href="{{ route('banks.index') }}">Banks</a></li>
    <li class="breadcrumb-item"><a href="{{ route('banks.show', $bank->id) }}">{{ $bank->id }}</a></li>
    <li class="breadcrumb-item active">Editar</li>
@endsection

@section('content')

    @include('adminlte-templates::common.errors')
   <div class="panel panel-info">
        <div class="panel-wrapper collapse in" aria-expanded="true">
            <div class="panel-body">
                    {!! Form::model($bank, ['route' => ['banks.update', $bank->id], 'method' => 'patch', 'class' => 'form-material']) !!}
                    <div class="form-body">
                        <h3 class="box-title">Bank Info</h3>
                        <hr>
                        <div class="row">

                            @include('banks.fields')

                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection