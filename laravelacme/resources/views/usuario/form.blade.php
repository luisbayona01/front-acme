<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idusuario') }}
            {{ Form::text('idusuario', $usuario->idusuario, ['class' => 'form-control' . ($errors->has('idusuario') ? ' is-invalid' : ''), 'placeholder' => 'Idusuario']) }}
            {!! $errors->first('idusuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numerodecedula') }}
            {{ Form::text('numerodecedula', $usuario->numerodecedula, ['class' => 'form-control' . ($errors->has('numerodecedula') ? ' is-invalid' : ''), 'placeholder' => 'Numerodecedula']) }}
            {!! $errors->first('numerodecedula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('primernombre') }}
            {{ Form::text('primernombre', $usuario->primernombre, ['class' => 'form-control' . ($errors->has('primernombre') ? ' is-invalid' : ''), 'placeholder' => 'Primernombre']) }}
            {!! $errors->first('primernombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('segundonombre') }}
            {{ Form::text('segundonombre', $usuario->segundonombre, ['class' => 'form-control' . ($errors->has('segundonombre') ? ' is-invalid' : ''), 'placeholder' => 'Segundonombre']) }}
            {!! $errors->first('segundonombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidos') }}
            {{ Form::text('apellidos', $usuario->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $usuario->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ciudad') }}
            {{ Form::text('ciudad', $usuario->ciudad, ['class' => 'form-control' . ($errors->has('ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad']) }}
            {!! $errors->first('ciudad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipousuario') }}
            {{ Form::text('tipousuario', $usuario->tipousuario, ['class' => 'form-control' . ($errors->has('tipousuario') ? ' is-invalid' : ''), 'placeholder' => 'Tipousuario']) }}
            {!! $errors->first('tipousuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>