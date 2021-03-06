
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" 
        data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link {{set_active('root_path')}}" href="{{route('root_path')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{set_active('about_path')}}" href="{{route('about_path')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Artisan</a>
              </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle"
               href="#" id="navbarDropdown"
               role="button" data-toggle="dropdown" 
               aria-haspopup="true" 
               aria-expanded="false">
                Planet
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="https://laravel.com">Laravel.com</a>
                <a class="dropdown-item" href="https://laracast.com">LaravelCast</a>
                <a class="dropdown-item" href="https://laravel.io">laravel.io</a>
                <a class="dropdown-item" href="https://larajob.com">laravelJob</a>
                <a class="dropdown-item" href="https://laravel.com">laravelNews</a>
                <a class="dropdown-item" href="https://laravel.com">laravelChat</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link {{set_active('contact_path')}}" href="{{route('contact_path')}}">Contact</a>
            </li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            @guest
            <li class="nav-item">
              <a class="nav-link" href="{{route('login')}}">Login</a>
          </li>
          <li class="nav-item">
              <a class="nav-link"  href="{{route('register')}}">Register</a>
          </li>
          @else
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>
            @endguest
          
          </ul>
        </div>
      </nav>
