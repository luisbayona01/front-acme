<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idvehiculos') }}
            {{ Form::text('idvehiculos', $vehiculo->idvehiculos, ['class' => 'form-control' . ($errors->has('idvehiculos') ? ' is-invalid' : ''), 'placeholder' => 'Idvehiculos']) }}
            {!! $errors->first('idvehiculos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('placa') }}
            {{ Form::text('placa', $vehiculo->placa, ['class' => 'form-control' . ($errors->has('placa') ? ' is-invalid' : ''), 'placeholder' => 'Placa']) }}
            {!! $errors->first('placa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('color') }}
            {{ Form::text('color', $vehiculo->color, ['class' => 'form-control' . ($errors->has('color') ? ' is-invalid' : ''), 'placeholder' => 'Color']) }}
            {!! $errors->first('color', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('marca') }}
            {{ Form::text('marca', $vehiculo->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipodevehiculo') }}
            {{ Form::text('tipodevehiculo', $vehiculo->tipodevehiculo, ['class' => 'form-control' . ($errors->has('tipodevehiculo') ? ' is-invalid' : ''), 'placeholder' => 'Tipodevehiculo']) }}
            {!! $errors->first('tipodevehiculo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idusuariovehiculo') }}
            {{ Form::text('idusuariovehiculo', $vehiculo->idusuariovehiculo, ['class' => 'form-control' . ($errors->has('idusuariovehiculo') ? ' is-invalid' : ''), 'placeholder' => 'Idusuariovehiculo']) }}
            {!! $errors->first('idusuariovehiculo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>