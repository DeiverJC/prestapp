<!-- Fee Field -->
<div class="form-group col-sm-6{{ $errors->has('fee') ? ' has-error' : '' }}">
    {!! Form::label('fee', 'Fee:') !!}
    {!! Form::text('fee', null, ['class' => 'form-control', 'placeholder' => 'Type fee..']) !!}
    @if ($errors->has('fee'))
        <small class="help-block"> {{ $errors->first('fee') }}</small>
    @endif
</div>

<!-- Balance Field -->
<div class="form-group col-sm-6{{ $errors->has('balance') ? ' has-error' : '' }}">
    {!! Form::label('balance', 'Balance:') !!}
    {!! Form::text('balance', null, ['class' => 'form-control', 'placeholder' => 'Type balance..']) !!}
    @if ($errors->has('balance'))
        <small class="help-block"> {{ $errors->first('balance') }}</small>
    @endif
</div>

<!-- Loan Id Field -->
<div class="form-group col-sm-6{{ $errors->has('loan_id') ? ' has-error' : '' }}">
    {!! Form::label('loan_id', 'Loan Id:') !!}
    {!! Form::text('loan_id', null, ['class' => 'form-control', 'placeholder' => 'Type loan_id..']) !!}
    @if ($errors->has('loan_id'))
        <small class="help-block"> {{ $errors->first('loan_id') }}</small>
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

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('loanDetails.index') !!}" class="btn btn-default">Cancel</a>
</div>
