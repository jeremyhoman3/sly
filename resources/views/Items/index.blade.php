@extends('...master')

@section('content')
    <h3>View items for sale</h3><br>

    @foreach($items as $item)
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="http://placehold.it/300&text=placehold.it+rocks!" alt="...">
                    <div class="caption">
                        <h4>{{ $item->title }}</h4>
                        <p>{{ $item->description }}</p>
                        <p><a href="#" class="btn btn-primary" role="button">Buy</a>
                        <!-- <a href="#" class="btn btn-default" role="button">Contact Seller</a></p> -->
                        <br>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@stop