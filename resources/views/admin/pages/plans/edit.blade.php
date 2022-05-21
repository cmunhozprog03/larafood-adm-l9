@extends('adminlte::page')

@section('title', 'Editar Plano')

@section('content_header')
    <h1>Editar Plano: <b> {{ $plan->name }} </b></h1>
@stop

@section('content')
    <div class="row justify-content-center">

        <div class="col-sm-12 col md-8 col-lg-8">
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('plans.update', $plan->url) }}" method="POST">
                        @method('PUT')
                        @include('admin.pages.plans._partials.form');
                        <div class="row justify-content-around">
                            <a href="{{ route('plans.index') }}" class="btn btn-secondary btn-flat">
                                <i class="fas fa-undo"></i>&nbsp; CANCELAR</a>
                            </a>
                            <button type="submit" class="btn btn-primary btn-flat">
                                <i class="fas fa-check-double"></i>&nbsp; ATUALIZAR</button>
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
