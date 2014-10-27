@extends('...master')

@section('content')
    <div class='container-fluid' style="width: 80%">
    <h3>Submit your item</h3>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach

    {!! Form::open(['route' => 'items.store', 'files' => 'true']) !!}

        @include('partials.form')

    {!! Form::close() !!}
    </div>
@stop