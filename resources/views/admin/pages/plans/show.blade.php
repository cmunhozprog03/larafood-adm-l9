@extends('adminlte::page')

@section('title', "Detalhes do Plano - {$plan->name}")

@section('content_header')
    <h1>Detalhes do Plano: <b>{{ $plan->name }}</b></h1>
@stop

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-8 col-lg-8">
            <div class="card shadow-lg">
                <div class="card-body">
                    <ul class="text-lg">
                        <li>
                            <strong>Nome: </strong> {{ $plan->name }}
                        </li>
                        <li>
                            <strong>URL: </strong> {{ $plan->url }}
                        </li>
                        <li>
                            <strong>Valor: </strong> R$ {{ number_format($plan->price, 2, ',', '.')  }}
                        </li>
                        <li>
                            <strong>Descrição: </strong> {{ $plan->description }}
                        </li>
                    </ul>
                </div>
                <div class="card-footer">
                    <div class="row justify-content-between">
                        <form action="{{ route('plans.destroy', $plan->url) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>&nbsp
                                EXLUIR PLANO: <b>{{ $plan->name }}</b>?
                            </button>
                        </form>
                        <a href="{{ route('plans.edit', $plan->url) }}" class="btn btn-info"><i class="fas fa-pen-alt"></i>&nbsp; EDITAR</a>
                        <a href="{{ route('plans.index') }}" class="btn btn-secondary">
                            <i class="fas fa-undo"></i>&nbsp; VOLTAR</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

@stop

@section('css')

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
