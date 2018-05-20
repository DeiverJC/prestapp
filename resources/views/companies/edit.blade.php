@extends('layouts.app')

@section('title', 'Edit Companies')

@section('breadcrumb')
    <li class="breadcrumb-item "><a href="{{ route('companies.index') }}">Companies</a></li>
    <li class="breadcrumb-item"><a href="{{ route('companies.show', $company->id) }}">{{ $company->id }}</a></li>
    <li class="breadcrumb-item active">Editar</li>
@endsection

@section('content')

    @include('adminlte-templates::common.errors')
   <div class="panel panel-info">
        <div class="panel-wrapper collapse in" aria-expanded="true">
            <div class="panel-body">
                    {!! Form::model($company, ['route' => ['companies.update', $company->id], 'method' => 'patch', 'class' => 'form-material']) !!}
                    <div class="form-body">
                        <h3 class="box-title">Company Info</h3>
                        <hr>
                        <div class="row">

                            @include('companies.fields')

                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection