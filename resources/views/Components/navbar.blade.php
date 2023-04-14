<nav class="customNav navbar navbar-expand-lg bg-body-tertiary   ">
  <div class="container-fluid">
    <img class="" src="{{ asset('media/logo.png') }}" alt="" width="250">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"> 
      </span>
    </button>
    <div class="collapse navbar-collapse dropBg " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link  fs-5 lead  mx-5" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-5 lead  mx-5" href="{{route('mipresento')}}">Mi presento</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-5 lead  mx-5" href="{{route('lemiericette')}}">I miei piatti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-5 lead  mx-5" href="{{route('contattami')}}">Contattami</a>
        </li>
                
      </ul>
      
    </div>
  </div>
</nav>