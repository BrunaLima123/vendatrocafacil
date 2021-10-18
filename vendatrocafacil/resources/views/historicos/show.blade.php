@extends('historicos.layout')

@section('title',__($historico->nome . ': CRUD Laravel'))

@push('css')
<style>
    table{
        font-family: Verdana,sans-serif;
        border: 1px solid #ccc;
        margin: 20px 0;
    }
table th{
    padding:10px;
    font-weight: normal;
}
</style>
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between w-100">
                        <span><span class="text-info">{{$historico->nome}}</span>: (@lang('CRUD Laravel'))</span>
                        <a href="{{ url('historicos') }}" class="btn-info btn-sm">
                            <i class="fa fa-arrow-left"></i> @lang('Voltar')
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif


                    <table class="w3-table-all notranslate" width="100%" border="1">
                        <tbody>
                        <tr>
                          <th align="left"><strong>ID:</strong></th>
                          <th align="left">{{$historico->id}}</th>
                        </tr>
                        <tr>
                            <th align="left"><strong>@lang('Produto')</strong>:</th>
                            <th align="left">{{$historico->produto}}</th>
                        </tr>
                        <tr>
                            <th align="left"><strong>@lang('Valor')</strong>:</th>
                            <th align="left">{{$historico->valor}}</th>
                          </tr>
                          <tr>
                          <tr>
                            <th align="left"><strong>@lang('Data da Compra')</strong>:</th>
                            <th align="left">{{$historico->data_compra}}</th>
                        </tr>
                        <tr>
                            <th align="left"><strong>@lang('Data da Entrega')</strong>:</th>
                            <th align="left">{{$historico->data_entrega}}</th>
                          </tr>
                          
                          <tr>
                            <th align="left"><strong>@lang('Adicionado')</strong>:</th>
                            <th align="left">{{$historico->created_at}}</th>
                          </tr>
                          <tr>
                              <th align="left"><strong>@lang('Atualizado')</strong>:</th>
                              <th align="left">{{$historico->updated_at}}</th>
                          </tr>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    // Script personalizado
</script>
@endpush