@extends('app')

@section('content')

    <div CLASS="container">
        <h3>Nova Clients</h3>

        @include('errors._check')

        {!! Form::open(['route'=>'admin.clients.store', 'class'=>'form']) !!}

        @include('admin.clients._form')

        <!-- Submit Form -->
            <div class="form-group">
                {!! Form::submit('Criar Clients', ['class'=>'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}

    </div>
@endsection