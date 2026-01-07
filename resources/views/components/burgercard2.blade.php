<div class="container-fluid bg-card2 py-5 px-0">
  <div class="card-custom2 mx-auto text-center">
    <div class="card-inner">
      <div class="card-face card-front">
        <img
          src="{{ $burger['img'] }}"
          class="card-img-top"
          alt="{{ $burger['name'] }}"
        >

        <div class="card-body">
          <h5 class="card-title">{{ $burger['name'] }}</h5>
          <p class="card-text mt-3">{{ $burger['description'] }}</p>
        </div>
      </div>
      <div class="card-face card-back">
        <h5 class="card-title">Ingredienti</h5>
        <p class="card-text mt-3">{{ $burger['ingredients'] }}</p>
        <p class="price">€ {{ $burger['price'] }}</p>
      </div>

    </div>
  </div>
</div>
