<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        
    </head>
    <body id="body">
        <div id="app">
            <div class="mb-3">
                <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
                    <a class="navbar-brand" href="#">{{env('app_name')}}</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                      <ul class="navbar-nav ml-auto">
                        {{-- <li class="nav-item active">
                          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li> --}}
                        <li class="nav-item">
                            <router-link :to="{name: 'LoginUser'}" class="nav-link">Login</router-link>
                          {{-- <a class="" href="#">Login</a> --}}
                        </li>
                        <li class="nav-item">
                            <router-link :to="{name: 'RegisterUser'}" class="nav-link">Register</router-link>
                          {{-- <a class="nav-link" href="#">Register</a> --}}
                        </li>
                        {{-- <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown link
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </li> --}}
                      </ul>
                    </div>
                  </nav>
                  {{-- <div class="container mb-5">
                        <div class="row">
                            <div class="col-md-6 mx-auto mt-5">
                                <img width="250px" class="mx-auto d-block" src="{{asset('img/welcome.svg')}}" alt="welcome">
                                <h1 class="text-center">Hi welcome to Messenger</h1>
                            </div>
                        </div>
                  </div> --}}
               <div class="mt-5">
                <router-view></router-view>
               </div>
            </div>
           
        </div>
        <script src="{{mix('js/app.js')}}"></script>
    </body>
</html>
