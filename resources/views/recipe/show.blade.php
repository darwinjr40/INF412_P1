@extends('layouts.app')

@section('template_title')
    {{ $recipe->name ?? 'Show Recipe' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Recipe</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('recipes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $recipe->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Medicamento:</strong>
                            {{ $recipe->medicamento }}
                        </div>
                        <div class="form-group">
                            <strong>Presentacion:</strong>
                            {{ $recipe->presentacion }}
                        </div>
                        <div class="form-group">
                            <strong>Dosis:</strong>
                            {{ $recipe->dosis }}
                        </div>
                        <div class="form-group">
                            <strong>Duracion:</strong>
                            {{ $recipe->duracion }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $recipe->cantidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
