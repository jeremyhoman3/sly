@extends('master')

@section('content')
    <h2>Edit your item</h2>

    {!! Form::model($item, ['route' => ['items.store', $item->id]]) !!}

    @include('partials.form')

    {!! Form::close() !!}
@stop