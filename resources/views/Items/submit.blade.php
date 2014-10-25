@extends('...master')

@section('content')
    <h2>Submit your item</h2>

    {!! Form::open(['url' => 'item/store', 'files' => 'true']) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('price', 'Price') !!}
        {!! Form::text('price', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
            {!! Form::label('item-image', 'Item Image (1 image required)') !!}
            <br><br>
            {!! Form::file('firstImageSlug') !!}<br>
            {!! Form::file('image2') !!}<br>
            {!! Form::file('image3') !!}<br>
    </div>

    <div class="form-group">
        {!! Form::submit('Submit Item', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
@stop