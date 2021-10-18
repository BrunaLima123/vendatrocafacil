@extends('historicos.layout')

@section('title',__('(CRUD Laravel)'))

@push('css')
<style>
    /* Personalizar layout*/
</style>
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between w-100">

                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>@lang('Produto')</td>
                                <td>@lang('Valor')</td>
                                <td>@lang('Data da Compra')</td>
                                <td>@lang('Data da Entrega')</td>
                    
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($historicos as $historico)
                            <tr>
                                <td>{{$historico->id}}</td>
                                <td>{{$historico->produto}}</td>
                                <td>{{$historico->valor}}</td>
                                <td>{{$historico->data_compra}}</td>
                                <td>{{$historico->data_entrega}}</td>
                           
                                <td class="text-center p-0 align-middle" width="70">
                                    <a href="{{ route('historicos.show', $historico->id)}}"
                                        class="btn btn-info btn-sm">@lang('Abrir')
                                    </a>
                                </td>
                                <td class="text-center p-0 align-middle" width="70">
                                    <a href="{{ route('historicos.edit', $historico->id)}}"
                                        class="btn btn-primary btn-sm">@lang('Editar')
                                    </a>
                                </td>
                                <td class="text-center p-0 align-middle" width="70">
                                    <form action="{{ route('historicos.destroy', $historico->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
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