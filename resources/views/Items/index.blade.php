@extends('...master')

@section('content')
    <h3>View items for sale</h3><br>

    @foreach($items as $item)
        <h4>{{ $item->title }}</h4>
        <p>{{ $item->description }}</p>
        <br>
    @endforeach
@stop