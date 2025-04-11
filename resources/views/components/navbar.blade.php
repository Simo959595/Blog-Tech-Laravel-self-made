




<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('welcome')}}">Homepage</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('index')}}">VETRINA DEI PRODOTTI</a>
        </li>
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">ACCEDI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">REGISTRATI</a>
        </li>
        @else
        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{route('form')}}">INSERISCI IL TUO PRODOTTO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">CIAO {{Auth::user()->name}}</a>
        </li>
         <form action="{{route('logout')}}" method="POST">
              @csrf
              <button type="submit" class="btn btn-danger">Logout</button>
            </form>
            @endguest
          @endauth
      </ul>
    </div>
  </div>
</nav>
