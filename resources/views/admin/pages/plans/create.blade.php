@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cadastrar Novo Plano</h1>
@stop

@section('content')
    <div class="row justify-content-center">

        <div class="col-sm-12 col md-8">
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('plans.store') }}" method="POST">
                        @include('admin.pages.plans._partials.form');

                        <button type="submit" class="btn btn-secondary btn-flat">Cadastrar</button>
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
