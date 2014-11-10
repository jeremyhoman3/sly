@extends('...master')

@section('content')
    <h3>Items for sale</h3><br>

    <?php $i = 1; $break = 4; ?>
    @foreach($items as $item)
        @if ($i == 1)
            <div class="row">
        @endif
            <!-- item -->
            <div class="col-sm-3">
                <div class="thumbnail" style="height: 420px;">
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
        @if ($i > $break)
            </div>
            <?php $i = 1; ?>
        @endif
        <?php $i++; ?>
    @endforeach
@stop