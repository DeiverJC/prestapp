<!-- Id Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('id', 'Id:', ['class' => 'control-label col-md-3 pull-left']) !!}
        <div class="col-md-9">
            <p class="form-control-static"> {!! $loan->id !!} </p>
        </div>
    </div>
</div>

<!-- Principal Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('principal', 'Principal:', ['class' => 'control-label col-md-3 pull-left']) !!}
        <div class="col-md-9">
            <p class="form-control-static"> {!! $loan->principal !!} </p>
        </div>
    </div>
</div>

<!-- Interest Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('interest', 'Interest:', ['class' => 'control-label col-md-3 pull-left']) !!}
        <div class="col-md-9">
            <p class="form-control-static"> {!! $loan->interest !!} </p>
        </div>
    </div>
</div>

<!-- Term Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('term', 'Term:', ['class' => 'control-label col-md-3 pull-left']) !!}
        <div class="col-md-9">
            <p class="form-control-static"> {!! $loan->term !!} </p>
        </div>
    </div>
</div>

<!-- Fee Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('fee', 'Fee:', ['class' => 'control-label col-md-3 pull-left']) !!}
        <div class="col-md-9">
            <p class="form-control-static"> {!! $loan->fee !!} </p>
        </div>
    </div>
</div>

<!-- Type Term Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('type_term', 'Type Term:', ['class' => 'control-label col-md-3 pull-left']) !!}
        <div class="col-md-9">
            <p class="form-control-static"> {!! $loan->type_term !!} </p>
        </div>
    </div>
</div>

<!-- Customer Id Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('customer_id', 'Customer Id:', ['class' => 'control-label col-md-3 pull-left']) !!}
        <div class="col-md-9">
            <p class="form-control-static"> {!! $loan->customer_id !!} </p>
        </div>
    </div>
</div>

<!-- Created At Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('created_at', 'Created At:', ['class' => 'control-label col-md-3 pull-left']) !!}
        <div class="col-md-9">
            <p class="form-control-static"> {!! $loan->created_at !!} </p>
        </div>
    </div>
</div>

<!-- Updated At Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('updated_at', 'Updated At:', ['class' => 'control-label col-md-3 pull-left']) !!}
        <div class="col-md-9">
            <p class="form-control-static"> {!! $loan->updated_at !!} </p>
        </div>
    </div>
</div>

