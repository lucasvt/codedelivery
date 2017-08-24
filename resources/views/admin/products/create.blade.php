@extends('app')

@section('content')

    <div CLASS="container">
        <h3>Nova Produto</h3>

        @include('errors._check')

        {!! Form::open(['route'=>'admin.products.store', 'class'=>'form']) !!}

        @include('admin.products._form')

        <!-- Submit Form -->
            <div class="form-group">
                {!! Form::submit('Criar Produto', ['class'=>'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}

    </div>
@endsection