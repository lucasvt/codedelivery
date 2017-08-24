@extends('app')

@section('content')

    <div CLASS="container">
        <h3>Editando Produtos: {{$product->name}}</h3>

            @include('errors._check')

            {!! Form::model($product, ['route'=>['admin.products.update', $product->id]]) !!}

            @include('admin.products._form')

            <!-- Submit Form -->
            <div class="form-group">
                {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}

    </div>
@endsection