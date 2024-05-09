@extends('layout.main')

@section('content')

<div class="container">

    <div class="card">
        <div class="photo">
          <img class="first-photo" src="/img/1.webp" alt="">
          <img class="second-photo" src="/img/1b.webp" alt="">

            <div class="heart">&#9829;</div>

          <div class="sold">

            <span v-for="discount in finalProduct.badges" key="discount" class="discount.type" class="badge discount">discount.value </span>


          </div>

        </div>
        <p>levis</p>
        <h3>relax</h3>
        <p>20 €</p>
    </div>
    <div class="card">
        <div class="photo">
          <img class="first-photo" src="/img/1.webp" alt="">
          <img class="second-photo" src="/img/1b.webp" alt="">

            <div class="heart">&#9829;</div>

          <div class="sold">

            <span v-for="discount in finalProduct.badges" key="discount" class="discount.type" class="badge discount">discount.value </span>


          </div>

        </div>
        <p>levis</p>
        <h3>relax</h3>
        <p>20 €</p>
    </div>
    <div class="card">
        <div class="photo">
          <img class="first-photo" src="/img/1.webp" alt="">
          <img class="second-photo" src="/img/1b.webp" alt="">

            <div class="heart">&#9829;</div>

          <div class="sold">

            <span v-for="discount in finalProduct.badges" key="discount" class="discount.type" class="badge discount">discount.value </span>


          </div>

        </div>
        <p>levis</p>
        <h3>relax</h3>
        <p>20 €</p>
    </div>

</div>

@endsection
