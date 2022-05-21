@extends('adminlte::page')

@section('title', 'Detalhes do Plano {$plan->name}')

@section('content_header')
    <div class="row justify-content-around">

        <div class="col-sm-12 col-md-8 col-lg-8">
            <h3>Detalhes do plano: <b>{{ $plan->name }}</b></h3>

        </div>
        {{-- <div class="col-sm-12 col-md-5">
            <form action="{{ route('plans.search') }}" class="form form-inline mt-2" method="POST">
                @csrf

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Procurar..." name="filter"
                        value="{{ $filters['filter'] ?? '' }}">
                    <div class="input-group-append">
                      <button class="btn btn-secondary btn-flat"><i class="fas fa-search fa-lg"></i></button>
                    </div>
                  </div>
            </form>
        </div> --}}
        <div class="col-sm-12 col-md-4  col-lg-2">
            <a href="{{ route('plan.details.create', $plan->url) }}"
             class="btn btn-secondary btn-flat"> <i class="fas fa-plus-square fa-lg"></i>&nbsp; NOVO</a>
        </div>
    </div>

@stop

@section('content')
    <div class="card shadow">
        <div class="card-body table-responsive p-0">
            <table class="table table-striped table-bordered table-hover">
                <thead class="text-center">
                    <tr class="font-weight-bold bg-secondary">
                        <th>Nome</th>
                        <th width="150">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($details as $detail)
                        <tr class="text-bold">
                            <td>{{ $detail->name }}</td>

                            <td class="text-center">
                                <a href="{{ route('plans.show', $plan->url) }}"
                                    class="btn btn-warning btn-flat btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('plans.edit', $plan->url) }}"
                                    class="btn btn-info btn-flat btn-sm">
                                    <i class="fas fa-pen-alt"></i>
                                </a>

                            </td>
                        </tr>
                    @empty
                        <div class="alert alert-secondary">
                            Não foram encontrados nenhum registro.
                        </div>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $details->appends($filters)->links() !!}
            @else
                {!! $details->links() !!}
            @endif

        </div>
    </div>
@stop

@section('css')

@stop

@section('js')

@stop
