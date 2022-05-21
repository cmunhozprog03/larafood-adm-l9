@extends('adminlte::page')

@section('title', 'Novo Detalhe do Plano')

@section('content_header')
    <h1>Cadastrar Novo Detalhe do Plano</h1>
@stop

@section('content')
    <div class="row justify-content-center">

        <div class="col-sm-12 col md-8 col-lg-8">
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('plan.details.store', $plan->url) }}" method="POST">
                        @include('admin.pages.plans.details._partials.form');
                        <div class="row justify-content-around">
                            <a href="{{ route('plan.details.index', $plan->url) }}" class="btn btn-secondary btn-flat">
                                <i class="fas fa-undo"></i>&nbsp; CANCELAR</a>
                            </a>
                            <button type="submit" class="btn btn-primary btn-flat">
                                <i class="fas fa-check-double"></i>&nbsp; CADASTRAR</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>

@stop

@section('css')

@stop

@section('js')

@stop
