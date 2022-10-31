@extends('layouts.app')

@section('template_title')
    {{ $usuario->name ?? 'Show Usuario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idusuario:</strong>
                            {{ $usuario->idusuario }}
                        </div>
                        <div class="form-group">
                            <strong>Numerodecedula:</strong>
                            {{ $usuario->numerodecedula }}
                        </div>
                        <div class="form-group">
                            <strong>Primernombre:</strong>
                            {{ $usuario->primernombre }}
                        </div>
                        <div class="form-group">
                            <strong>Segundonombre:</strong>
                            {{ $usuario->segundonombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $usuario->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $usuario->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $usuario->ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Tipousuario:</strong>
                            {{ $usuario->tipousuario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
