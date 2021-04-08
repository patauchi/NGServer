{{-- <nav>
	<ul>
		<li><a href="  ">Inicio</a></li>
		<li><a href=" {{ route('projects.index') }} ">Proyectos</a></li>
		<li><a href=" {{ route('news.index') }} ">Noticias</a></li>
		<li><a href=" {{ route('species.index') }} ">Species</a></li>
	</ul>
</nav> --}}


<div class="d-flex flex-column flex-md-row align-items-center pt-0 px-md-4 text-uppercase shadow-sm borderDom">
        <h5 class="my-0 mr-md-auto font-weight-normal">INESAM</h5>
        <img class="logoPage" src="/img/logo2.svg">
        <nav class="navbar navbar-expand-lg navbar-light ">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav menuFont">
              <li class="nav-item active">
                <a class="nav-link  font-weigth-menu" href="/">home</a>

{{--               </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  font-weigth-menu" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   nuestro trabajo
                </a>
                <div class="dropdown-menu menuFont" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item pt-3 pb-3  font-weigth-menu" href="#">Especies Amenzadas y Cambio Climático</a>
                </div>
              </li> --}}

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  font-weigth-menu" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   servicios
                </a>
                <div class="dropdown-menu menuFont" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item pt-2 pb-2  font-weigth-menu" href="#">Portal CDCE</a>
{{--                   <a class="dropdown-item pt-2 pb-2  font-weigth-menu" href="#">Base de datos BIPEIN </a>
 --}}                </div>
              </li>
               <li class="nav-item">
                <a class="nav-link  font-weigth-menu" href="#">investigacion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  font-weigth-menu" href="#">ayudanos</a>
              </li>
              @guest

            @else
            <li class="nav-item"><a class="nav-link" href="#" onclick="event.preventDefault();
            document.getElementById('logout-form').submit()">Cerrar Sesion</a></li>
            @endguest
            </ul>
          </div>
        </nav>
        <a class="btn btn-donar px-4" style="font-size: 13px;" href="#">DONAR</a>
        @auth

            <a class="nav-link disabled">{{auth()->user()->name}}</a>

      </div>
      @endauth
      </div>




        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
    @csrf
  </form>
