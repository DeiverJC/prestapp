@extends('layouts.app')

@section('title', 'Ver Loans')

@section('breadcrumb')
    <li class="breadcrumb-item "><a href="{{ route('loans.index') }}">Loans</a></li>
    <li class="breadcrumb-item active">{{ $loan->id }}</li>
@endsection

@section('content')

    <div class="panel panel-info">
        <div class="panel-wrapper collapse in" aria-expanded="true">
            <div class="panel-body">
                <div class="form-horizontal" role="form">
                    <div class="form-body">
                        <h3 class="box-title">
                            Loan Info
                            <span class="btn-group pull-right">
                                <a href="{!! route('loans.edit', [$loan->id]) !!}"
                                    class="fcbtn btn btn-sm btn-outline btn-info btn-1c">
                                    <i class="ti-pencil-alt"></i> Edit</a>
                                <a href="{!! route('loans.index') !!}" class="fcbtn btn btn-sm btn-outline btn-danger btn-1c"><i class="ti-back-left"></i> Back</a></a>
                            </span>

                        </h3>
                        <hr class="m-t-0 m-b-40">
                        <div class="row">

                            @include('loans.show_fields')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
