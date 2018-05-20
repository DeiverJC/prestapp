@extends('layouts.app')

@section('title', 'Edit Bancs')

@section('breadcrumb')
    <li class="breadcrumb-item "><a href="{{ route('bancs.index') }}">Bancs</a></li>
    <li class="breadcrumb-item"><a href="{{ route('bancs.show', $banc->id) }}">{{ $banc->id }}</a></li>
    <li class="breadcrumb-item active">Editar</li>
@endsection

@section('content')

    @include('adminlte-templates::common.errors')
   <div class="panel panel-info">
        <div class="panel-wrapper collapse in" aria-expanded="true">
            <div class="panel-body">
                    {!! Form::model($banc, ['route' => ['bancs.update', $banc->id], 'method' => 'patch', 'class' => 'form-material']) !!}
                    <div class="form-body">
                        <h3 class="box-title">Banc Info</h3>
                        <hr>
                        <div class="row">

                            @include('bancs.fields')

                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection