<!-- Name Field -->
<div class="form-group col-sm-6{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Type name..']) !!}
    @if ($errors->has('name'))
        <small class="help-block"> {{ $errors->first('name') }}</small>
    @endif
</div>

<!-- Ocupation Field -->
<div class="form-group col-sm-6{{ $errors->has('ocupation') ? ' has-error' : '' }}">
    {!! Form::label('ocupation', 'Ocupation:') !!}
    {!! Form::text('ocupation', null, ['class' => 'form-control', 'placeholder' => 'Type ocupation..']) !!}
    @if ($errors->has('ocupation'))
        <small class="help-block"> {{ $errors->first('ocupation') }}</small>
    @endif
</div>

<!-- Email Field -->
<div class="form-group col-sm-6{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Type email..']) !!}
    @if ($errors->has('email'))
        <small class="help-block"> {{ $errors->first('email') }}</small>
    @endif
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('clients.index') !!}" class="btn btn-default">Cancel</a>
</div>
