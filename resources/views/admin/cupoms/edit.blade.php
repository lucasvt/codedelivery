@extends('app')

@section('content')

    <div CLASS="container">
        <h3>Editando categoria: {{$category->name}}</h3>

            @include('errors._check')

            {!! Form::model($category, ['route'=>['admin.categories.update', $category->id]]) !!}

            @include('admin.categories._form')

            <!-- Submit Form -->
            <div class="form-group">
                {!! Form::submit('Salvar Categorias', ['class'=>'btn btn-primary']) !!}
            </div>


            {!! Form::close() !!}

    </div>
@endsection