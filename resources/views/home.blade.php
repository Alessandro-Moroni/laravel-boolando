@extends('layout.main')

@section('content')

@php
    $card = config('card-array');
@endphp

<div class="container">

    @foreach ($card['products'] as $product)

        <div class="card">
            <div class="photo">
                <img class="first-photo" src="{{Vite::asset('public/img/').$product['frontImage']}}" alt="">
                <img class="second-photo" src="{{Vite::asset('public/img/').$product['backImage']}}" alt="">

                <div class="heart">&#9829;</div>

                <div class="sold">

                    @foreach ($product['badges'] as $discount)

                        <span  key="discount" class="{{$discount['type']}}">{{$discount['value']}}</span>



                    @endforeach


                </div>

            </div>
            <p>{{$product['brand']}}</p>
            <h3>{{$product['name']}}</h3>
            <p>{{$product['price']}}</p>
        </div>

    @endforeach

</div>

@endsection
