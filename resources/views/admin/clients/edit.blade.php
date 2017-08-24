@extends('app')

@section('content')

    <div CLASS="container">
        <h3>Editando Clients: {{$clients->user->name}}</h3>

            @include('errors._check')

            {!! Form::model($clients, ['route'=>['admin.clients.update', $clients->id]]) !!}

            @include('admin.clients._form')

            <!-- Submit Form -->
            <div class="form-group">
                {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}

    </div>
@endsection