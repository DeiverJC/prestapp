<!-- Customer Id Field -->
<div class="form-group col-sm-6{{ $errors->has('customer_id') ? ' has-error' : '' }}">
    {!! Form::label('customer_id', 'Customer:') !!}
    {!! Form::select('customer_id', $customers, null, ['class' => 'form-control', 'placeholder' => 'Pick a customer...']); !!}
    {{-- {!! Form::text('customer_id', null, ['class' => 'form-control', 'placeholder' => 'Type customer_id..']) !!} --}}
    @if ($errors->has('customer_id'))
        <small class="help-block"> {{ $errors->first('customer_id') }}</small>
    @endif
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6{{ $errors->has('created_at') ? ' has-error' : '' }}">
    {!! Form::label('created_at', 'Created At:') !!}
    {!! Form::date('created_at', null, ['class' => 'form-control']) !!}
    @if ($errors->has('created_at'))
        <small class="help-block"> {{ $errors->first('created_at') }}</small>
    @endif
</div>

<!-- Principal Field -->
<div class="form-group col-sm-6{{ $errors->has('principal') ? ' has-error' : '' }}">
    {!! Form::label('principal', 'Principal:') !!}
    {!! Form::text('principal', null, ['class' => 'form-control', 'placeholder' => 'Type principal..']) !!}
    @if ($errors->has('principal'))
        <small class="help-block"> {{ $errors->first('principal') }}</small>
    @endif
</div>

<!-- Interest Field -->
<div class="form-group col-sm-6{{ $errors->has('interest') ? ' has-error' : '' }}">
    {!! Form::label('interest', 'Interest:') !!}
    {!! Form::text('interest', null, ['class' => 'form-control', 'placeholder' => 'Type interest..']) !!}
    @if ($errors->has('interest'))
        <small class="help-block"> {{ $errors->first('interest') }}</small>
    @endif
</div>

<!-- Term Field -->
<div class="form-group col-sm-6{{ $errors->has('term') ? ' has-error' : '' }}">
    {!! Form::label('term', 'Term:') !!}
    {!! Form::text('term', null, ['class' => 'form-control', 'placeholder' => 'Type term..']) !!}
    @if ($errors->has('term'))
        <small class="help-block"> {{ $errors->first('term') }}</small>
    @endif
</div>

<!-- Fee Field -->
<div class="form-group col-sm-6{{ $errors->has('fee') ? ' has-error' : '' }}">
    {!! Form::label('fee', 'Fee:') !!}
    {!! Form::text('fee', null, ['class' => 'form-control', 'placeholder' => 'Type fee..']) !!}
    @if ($errors->has('fee'))
        <small class="help-block"> {{ $errors->first('fee') }}</small>
    @endif
</div>

<!-- Type Term Field -->
<div class="form-group col-sm-6{{ $errors->has('type_term') ? ' has-error' : '' }}">
    {!! Form::label('type_term', 'Type Term:') !!}
    {!! Form::select('type_term', [
        'Mensual' => 'Mensual',
        'Quincenal' => 'Quincinal',
        'Semanal' => 'Semanal',
        'Diario' => 'Diario'
        ], null, ['class' => 'form-control', 'placeholder' => 'Pick a Type Term...']) !!}

    @if ($errors->has('type_term'))
        <small class="help-block"> {{ $errors->first('type_term') }}</small>
    @endif
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('loans.index') !!}" class="btn btn-default">Cancel</a>
</div>
