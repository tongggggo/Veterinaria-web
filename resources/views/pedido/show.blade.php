@extends('layouts.app')

@section('template_title')
    {{ $pedido->name ?? "{{ __('Show') Pedido" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pedido</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pedidos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $pedido->Precio }}
                        </div>
                        <div class="form-group">
                            <strong>Cliente Id:</strong>
                            {{ $pedido->cliente_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
