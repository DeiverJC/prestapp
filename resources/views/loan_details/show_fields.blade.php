<!-- Id Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('id', 'Id:', ['class' => 'control-label col-md-3 pull-left']) !!}
        <div class="col-md-9">
            <p class="form-control-static"> {!! $loanDetail->id !!} </p>
        </div>
    </div>
</div>

<!-- Fee Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('fee', 'Fee:', ['class' => 'control-label col-md-3 pull-left']) !!}
        <div class="col-md-9">
            <p class="form-control-static"> {!! $loanDetail->fee !!} </p>
        </div>
    </div>
</div>

<!-- Balance Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('balance', 'Balance:', ['class' => 'control-label col-md-3 pull-left']) !!}
        <div class="col-md-9">
            <p class="form-control-static"> {!! $loanDetail->balance !!} </p>
        </div>
    </div>
</div>

<!-- Loan Id Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('loan_id', 'Loan Id:', ['class' => 'control-label col-md-3 pull-left']) !!}
        <div class="col-md-9">
            <p class="form-control-static"> {!! $loanDetail->loan_id !!} </p>
        </div>
    </div>
</div>

<!-- Created At Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('created_at', 'Created At:', ['class' => 'control-label col-md-3 pull-left']) !!}
        <div class="col-md-9">
            <p class="form-control-static"> {!! $loanDetail->created_at !!} </p>
        </div>
    </div>
</div>

<!-- Updated At Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('updated_at', 'Updated At:', ['class' => 'control-label col-md-3 pull-left']) !!}
        <div class="col-md-9">
            <p class="form-control-static"> {!! $loanDetail->updated_at !!} </p>
        </div>
    </div>
</div>

