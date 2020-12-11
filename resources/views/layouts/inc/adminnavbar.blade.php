<!-- Navbar -->
   <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
     <div class="container-fluid">

       <!-- Brand -->
       <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
         <strong class="blue-text">CLOTH.IN</strong>
       </a>

       <!-- Collapse -->
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

       <!-- Links -->
       <div class="collapse navbar-collapse" id="navbarSupportedContent">

         <!-- Left -->
         <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
             <a class="nav-link waves-effect" href="#">Home
               <span class="sr-only">(current)</span>
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">About
               MDB</a>
           </li>
           <li class="nav-item">
             <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/getting-started/download/"
               target="_blank">Free
               download</a>
           </li>
           <li class="nav-item">
             <a class="nav-link waves-effect" href="https://mdbootstrap.com/education/bootstrap/" target="_blank">Free
               tutorials</a>
           </li>
         </ul>

         <!-- Right -->
         <ul class="navbar-nav nav-flex-icons">
          <!-- <li class="nav-item">
             <a href="https://www.facebook.com/mdbootstrap" class="nav-link waves-effect" target="_blank">
               <i class="fab fa-facebook-f"></i>
             </a>
           </li>
           <li class="nav-item">
             <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
               <i class="fab fa-twitter"></i>
             </a>
           </li>
           <li class="nav-item">
             <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="nav-link border border-light rounded waves-effect"
               target="_blank">
               <i class="fab fa-github mr-2"></i>MDB GitHub
             </a>
           </li>!-->
           @guest
               <li class="nav-item">
                   <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
               </li>
               @if (Route::has('register'))
                   <li class="nav-item">
                       <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                   </li>
               @endif
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
                       <a class="dropdown-item" href="">Profil</a>
                       
                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           @csrf
                       </form>
                   </div>
               </li>
           @endguest
         </ul>

       </div>

     </div>
   </nav>
   <!-- Navbar -->
