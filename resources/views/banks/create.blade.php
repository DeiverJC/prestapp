@extends('layouts.app')

@section('title', 'Create Banks')

@section('breadcrumb')
    <li class="breadcrumb-item ">
        <a href="{{ route('banks.index') }}">
            Banks
        </a>
    </li>
    <li class="breadcrumb-item active">Register</li>
@endsection

@section('content')

    <div class="panel panel-info">
        <div class="panel-wrapper collapse in" aria-expanded="true">
            <div class="panel-body">
                {!! Form::open(['route' => 'banks.store', 'class' => 'form-material']) !!}
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
