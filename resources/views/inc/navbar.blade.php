<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#"><i class="fa fa-book"></i> Sidebook</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item @if(isset($active_page))@if($active_page=='home') active @else no @endif @endif">
            <a class="nav-link" href="/"><i class="fa fa-home"></i> Home </a>
          </li>
          <li class="nav-item @if(isset($active_page))@if($active_page=='discover') active @else no @endif @endif">
            <a class="nav-link" href="/discover"><i class="fa fa-map-marker"></i> Discover</a>
          </li>
          <li class="nav-item @if(isset($active_page))@if($active_page=='mystories') active @else no @endif @endif">
            <a class="nav-link" href="/mystories"><i class="fa fa-eye"></i> My Stories</a>
          </li>

        </ul>
        @if(Auth::guest())
          <a href="{{route('login')}}"><button class="btn btn-outline-success my-2 my-sm-0"><i class="fa fa-lock"></i> Login</button></a>&nbsp;
          <a href="{{route('register')}}"><button class="btn btn-outline-success my-2 my-sm-0"><i class="fa fa-user-plus"></i> Register</button></a>
        @else
         <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{Auth::user()->name}} <span class="caret"></span>
            </button>
            
             <div style="min-width: 9rem;" class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                <a class="dropdown-item" href="{{route('logout')}}" onclick=
                "event.preventDefault();
                 document.getElementById('logout-form').submit();">
                 <i class="fa fa-sign-out"></i> Logout
                 </a>
                 
                 <form id="logout-form" action="{{route('logout')}}" method="POST">
                  {{csrf_field()}}
                 </form>
              </div>
          </div>
        @endif
      </div>
    </nav>

    