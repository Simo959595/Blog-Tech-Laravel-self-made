{{-- inizio layout --}}
<x-layout>

    {{-- inizio body --}}
    {{-- titolo --}}
    <h1 class="display-1 text-primary">
    Esegui l'accesso
    </h1>
    {{-- container --}}
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
    {{-- inizio format errori --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    {{-- fine format errori --}}

    {{-- inizio form login --}}
    <form action="{{route('login')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label class="form-label">Indirizzo E-mail</label>
          <input type="email" class="form-control" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <button type="submit" class="btn btn-success">Accedi</button>
      </form>
    {{-- fine form login --}}
            </div>
        </div>
    </div>
    {{-- fine body --}}
        
    {{-- fine layout --}}
    </x-layout>