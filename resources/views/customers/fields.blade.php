<!-- Fist Name Field -->
<div class="form-group col-sm-6{{ $errors->has('fist_name') ? ' has-error' : '' }}">
    {!! Form::label('fist_name', 'Fist Name:') !!}
    {!! Form::text('fist_name', null, ['class' => 'form-control', 'placeholder' => 'Type fist_name..']) !!}
    @if ($errors->has('fist_name'))
        <small class="help-block"> {{ $errors->first('fist_name') }}</small>
    @endif
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6{{ $errors->has('last_name') ? ' has-error' : '' }}">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Type last_name..']) !!}
    @if ($errors->has('last_name'))
        <small class="help-block"> {{ $errors->first('last_name') }}</small>
    @endif
</div>

<!-- Dni Field -->
<div class="form-group col-sm-6{{ $errors->has('dni') ? ' has-error' : '' }}">
    {!! Form::label('dni', 'Dni:') !!}
    {!! Form::text('dni', null, ['class' => 'form-control', 'placeholder' => 'Type dni..']) !!}
    @if ($errors->has('dni'))
        <small class="help-block"> {{ $errors->first('dni') }}</small>
    @endif
</div>

<!-- Cellphone Field -->
<div class="form-group col-sm-6{{ $errors->has('cellphone') ? ' has-error' : '' }}">
    {!! Form::label('cellphone', 'Cellphone:') !!}
    {!! Form::number('cellphone', null, ['class' => 'form-control']) !!}
    @if ($errors->has('cellphone'))
        <small class="help-block"> {{ $errors->first('cellphone') }}</small>
    @endif
</div>

<!-- Address Field -->
<div class="form-group col-sm-6{{ $errors->has('address') ? ' has-error' : '' }}">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Type address..']) !!}
    @if ($errors->has('address'))
        <small class="help-block"> {{ $errors->first('address') }}</small>
    @endif
</div>

<!-- Banc Id Field -->
<div class="form-group col-sm-6{{ $errors->has('banc_id') ? ' has-error' : '' }}">
    {!! Form::label('banc_id', 'Banc Id:') !!}
    {!! Form::select('banc_id', $bancs, null, ['class' => 'form-control', 'placeholder' => 'Pick a banc...']); !!}
    {{-- {!! Form::text('banc_id', null, ['class' => 'form-control', 'placeholder' => 'Type banc_id..']) !!} --}}
    @if ($errors->has('banc_id'))
        <small class="help-block"> {{ $errors->first('banc_id') }}</small>
    @endif
</div>

<!-- Company Id Field -->
<div class="form-group col-sm-6{{ $errors->has('company_id') ? ' has-error' : '' }}">
    {!! Form::label('company_id', 'Company Id:') !!}
    {!! Form::select('company_id', $companies, null, ['class' => 'form-control', 'placeholder' => 'Pick a company...']); !!}
    {{-- {!! Form::text('company_id', null, ['class' => 'form-control', 'placeholder' => 'Type company_id..']) !!} --}}
    @if ($errors->has('company_id'))
        <small class="help-block"> {{ $errors->first('company_id') }}</small>
    @endif
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('customers.index') !!}" class="btn btn-default">Cancel</a>
</div>
