<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RotaTour - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>        
    </head>
    <body>
        @yield('top') 
            @yield('carousel')
            @yield('navbar')
        @yield('content')
        <footer class="page-footer bg-dark text-white">   
            <div class="container-flex">
                <div class="bg-primary">
                    <div class="row d-flex">
                        <div class="text-center py-3">
                            <a href="#"><i class="fab fa-facebook-f text-white"></i></a>
                            <a href="#"><i class="fab fa-twitter text-white"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g text-white"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in text-white"></i></a>
                            <a href="#"><i class="fab fa-instagram text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center text-md-left mt-4">
                <div class="row">
                <div class="col-md-3 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Rota Tour</h6>
                    <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 100px; height: 2px">
                    <p class="mt-2">Viagens incriveis, proporcionam momentos insquecíveis!</p>
                </div>            
                <div class="col-md-3 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Contatos</h6>
                    <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 85px; height: 2px">
                    <ul class="list-unstyled">
                    <li class="my-2"><i class="fas fa-home mr-3"></i>Limoeiro, Rua A</li>
                    <li class="my-2"><i class="fas fa-envelope mr-3"></i>rotatour@gmail.com</li>
                    <li class="my-2"><i class="fas fa-phone mr-3"></i>+55 81 9999-9999</li>
                    <li class="my-2"><i class="fas fa-print mr-3"></i>+55 81 3628-2345</li>
                    </ul>
                </div>
                <div class="col-md-3 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Selos</h6>
                    <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 45px; height: 2px">
                    <p><img src="img/icons/stamp_encryptssl.png"></p>
                    <p><img src="img/icons/logo-rodape-loja.png"></p>
                    <p>&copy; copyright</p>          
                </div>
                </div>
            </div>
        </footer>
        @section('scripts')
        @show
    </body>
</html>
