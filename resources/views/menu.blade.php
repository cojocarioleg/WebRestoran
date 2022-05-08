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
                    <h1>Our Menus</h1>
                    <p>Curabitur at dolor sed felis lacinia ultricies sit amet vel sem. Vestibulum diam leo, sodales tempor lectus sed, varius gravida mi.</p>
                </div>
            </div>
        </div>
    </section>


    @foreach ($categories as $category)
        @if ($category->id % 2 == 0)
            @include('components.menuDown',[
                'category'=>$category,
            ])
        @else
            @include('components.menuUp', [

                'category'=>$category,
            ])
        @endif
    @endforeach

    @include('components.reservation')
@endsection
