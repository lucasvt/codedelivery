@extends('app')

@section('content')

    <div CLASS="container">
        <h3>Cupoms</h3>

        <a href="{{ route('admin.cupoms.create') }}" class="btn btn-default">Novo Cupom</a>
        <br><br>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Código</th>
                <th>Valor</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cupoms as $cupom)
            <tr>
                <td>{{ $cupom->id }}</td>
                <td>{{ $cupom->code }}</td>
                <td>{{ $cupom->value }}</td>
                <td>
                    <a href="{{route('admin.cupoms.edit', ['id'=>$cupom->id])}}" class="btn btn-default btn-sm">
                        Editar
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>

        {!! $cupoms->render() !!}

    </div>
    @endsection