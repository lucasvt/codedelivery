<!-- Name Form Input -->
<div class="form-group">
    {!! Form::label('Category', 'Categoria:') !!}
    {!! Form::select('category_id', $categories, null,['class'=>'form-control']) !!}
</div>

<!-- Name Form Input -->
<div class="form-group">
    {!! Form::label('Name', 'Nome:') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>

<!-- Description Form Input -->
<div class="form-group">
    {!! Form::label('Description', 'Descrição:') !!}
    {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
</div>

<!-- Prince Form Input -->
<div class="form-group">
    {!! Form::label('Prince', 'Preco:') !!}
    {!! Form::text('price', null, ['class'=>'form-control']) !!}
</div>



