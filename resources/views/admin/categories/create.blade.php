@extends('app')

@section('content')

    <div CLASS="container">
        <h3>Nova Categoria</h3>

        @include('errors._check')

        {!! Form::open(['route'=>'admin.categories.store', 'class'=>'form']) !!}

        @include('admin.categories._form')

        <!-- Submit Form -->
            <div class="form-group">
                {!! Form::submit('Criar Categorias', ['class'=>'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}

    </div>
@endsection