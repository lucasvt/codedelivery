@extends('app')

@section('content')

    <div CLASS="container">
        <h3>Novo Cupom</h3>

        @include('errors._check')

        {!! Form::open(['route'=>'admin.cupoms.store', 'class'=>'form']) !!}

        @include('admin.cupoms._form')

        <!-- Submit Form -->
            <div class="form-group">
                {!! Form::submit('Criar Cupom', ['class'=>'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}

    </div>
@endsection