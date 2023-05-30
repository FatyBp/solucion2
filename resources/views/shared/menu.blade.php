<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">A-B</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('inicio')}}" ><i class="fa-solid fa-house-chimney"></i> Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{route('altasBajas')}}"> <i class="fa-solid fa-money-bill-transfer"></i> Altas y Bajas</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>