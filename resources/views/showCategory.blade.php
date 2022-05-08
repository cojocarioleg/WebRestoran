@extends('layots.main')
@extends('layots.footer')
@extends('layots.head')
@extends('layots.header')
@section('title', 'VictoryHomeMenu')

@section('content')


    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ $category->title }}</h1>
                    {!! $category->description !!}
                </div>
            </div>
        </div>
    </section>
    <section class="breakfast-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="lunch-menu-content">
                        <div class="row">

                            <div class="col-md-10">
                                <h2>{{ $category->title }} Menu</h2>

                                    @foreach ($category->products as $product)
                                        <div class="item col-md-5">
                                            <div class="food-item">
                                                <img src="{{Voyager::image($product->image)}}" alt="{{ $product->title }}">
                                                <div class="price">{{ $product->price }} MDL</div>
                                                <div class="text-content">
                                                    <h4><a href="{{ route('showProduct',[$product->category->slug, $product->slug]) }}">{{ $product->title }}</a> </h4>
                                                    <p>{{ $product->short_description }}...</p>
                                                </div>
                                            </div>
                                        </div>
                                 @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    @include('components.reservation')
@endsection
