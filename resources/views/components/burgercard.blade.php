<div class="container-fluid">
  <div class="card-custom mx-auto text-center my-5">

    <div class="burger-media">
      <img
        src="{{ $burger['img'] }}"
        class="burger-img"
        alt="{{ $burger['name'] }}"
      >
    </div>

    <div class="card-body">
      <h5 class="card-title mt-3">{{ $burger['name'] }}</h5>

      <p class="card-text">
        {{ $burger['ingredients'] }}
      </p>

      <p class="card-text price">
        € {{ $burger['price'] }}
      </p>

      <a
        href="{{ route('dettaglio', ['id' => $burger['id']]) }}"
        class="btn btn-outline-light mt-2"
      >
        CONOSCI LA STORIA
      </a>
    </div>

  </div>
</div>
