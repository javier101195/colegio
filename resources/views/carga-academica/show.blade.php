@extends('layouts.app')

@section('template_title')
    {{ $cargaAcademica->name ?? 'Show Carga Academica' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Carga Academica</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('carga-academicas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $cargaAcademica->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Materia Id:</strong>
                            {{ $cargaAcademica->materia_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
