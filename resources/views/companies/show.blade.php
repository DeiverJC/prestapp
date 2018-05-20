@extends('layouts.app')

@section('title', 'Ver Companies')

@section('breadcrumb')
    <li class="breadcrumb-item "><a href="{{ route('companies.index') }}">Companies</a></li>
    <li class="breadcrumb-item active">{{ $company->id }}</li>
@endsection

@section('content')

    <div class="panel panel-info">
        <div class="panel-wrapper collapse in" aria-expanded="true">
            <div class="panel-body">
                <div class="form-horizontal" role="form">
                    <div class="form-body">
                        <h3 class="box-title">
                            Company Info
                            <span class="btn-group pull-right">
                                <a href="{!! route('companies.edit', [$company->id]) !!}"
                                    class="fcbtn btn btn-sm btn-outline btn-info btn-1c">
                                    <i class="ti-pencil-alt"></i> Edit</a>
                                <a href="{!! route('companies.index') !!}" class="fcbtn btn btn-sm btn-outline btn-danger btn-1c"><i class="ti-back-left"></i> Back</a></a>
                            </span>

                        </h3>
                        <hr class="m-t-0 m-b-40">
                        <div class="row">

                            @include('companies.show_fields')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
