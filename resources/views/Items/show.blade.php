@extends('...master')

@section('content')
    <h2>{{ $item->title }}</h2>
    @if ($item->secondImageSlug)
        <!-- <p>display second image, if user provided a second image</p> -->
    @endif

    @if ($item->thirdImageSlug)
        <!-- <p>display third image, if user provided a third image</p> -->
    @endif
@stop