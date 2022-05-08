<section class="lunch-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="lunch-menu-content">
                    <div class="row">
                        <div class="col-md-7">
                            <h2>{{ $category->title }}Menu</h2>
                            <div id="owl-lunch" class="owl-carousel owl-theme">
                                @foreach ($category->products as $product)

                                    <div class="item col-md-12">
                                        <div class="food-item">
                                            <img src="{{Voyager::image($product->image)}}" alt="{{ $product->title }}">
                                            <div class="price">{{ $product->price }}</div>
                                            <div class="text-content">
                                                <h4>{{ $product->title }}</h4>
                                                <p>{{ $product->short_description }}...</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="left-image">
                                <img src="{{Voyager::image($category->image)}}" alt="{{ $category->title }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
