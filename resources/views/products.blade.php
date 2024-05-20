@extends('layouts.app')

@section('content')
    <section id="products">
        <div class="container">
            <h2>Lista prodotti</h2>

            <div class="products-list">
                @foreach ($comics as $comic)
                    <div class="product">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        <h3>{{ $comic['title'] }}</h3>
                        <p>{{ $comic['description'] }}</p>
                        <span>{{ $comic['price'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
