<div class="container">
  <div class="row">
    @foreach ($products as $product)
        
    <div class="col-12 col-md-4">

      {{-- inizio vetrina --}}
      <div class="card">
        <img src="https://picsum.photos/20{{$product->id}}" class="card-img-top" alt="immagine del prodotto {{$product->name}}">
        <div class="card-body">
          <h5 class="card-title"><span class="fw-bold">{{$product->type}}</span> {{$product->name}}</h5>
          <p class="card-text">Prezzo del prodotto: {{$product->price}} € </p>
          <a href="#" class="btn btn-primary">Dettaglio del prodotto</a>
        </div>
      </div>
      {{-- fine vetrina --}}  
      
    </div>
    @endforeach
  </div>
</div>
