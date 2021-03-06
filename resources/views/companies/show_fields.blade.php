<!-- Id Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('id', 'Id:', ['class' => 'control-label col-md-3 pull-left']) !!}
        <div class="col-md-9">
            <p class="form-control-static"> {!! $company->id !!} </p>
        </div>
    </div>
</div>

<!-- Name Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('name', 'Name:', ['class' => 'control-label col-md-3 pull-left']) !!}
        <div class="col-md-9">
            <p class="form-control-static"> {!! $company->name !!} </p>
        </div>
    </div>
</div>

<!-- Created At Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('created_at', 'Created At:', ['class' => 'control-label col-md-3 pull-left']) !!}
        <div class="col-md-9">
            <p class="form-control-static"> {!! $company->created_at !!} </p>
        </div>
    </div>
</div>

<!-- Updated At Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('updated_at', 'Updated At:', ['class' => 'control-label col-md-3 pull-left']) !!}
        <div class="col-md-9">
            <p class="form-control-static"> {!! $company->updated_at !!} </p>
        </div>
    </div>
</div>

