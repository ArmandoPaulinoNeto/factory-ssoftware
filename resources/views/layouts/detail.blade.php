@extends('layouts.framepage')
@section('title', 'Detalhes')
<link href="{{ asset('assets/css/stile.css') }}" rel="stylesheet" type="text/css">
@section('top')
    <div class="container-fluid"><!--carousel-->
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{ asset('assets/img/carousel/img.jpg') }}" class="d-block w-100" alt="Imagem de uma belissima práia da Grécia.">
            </div>
            <div class="carousel-item">
            <img src="{{ asset('assets/img/carousel/img1.jpg') }}" class="d-block w-100" alt="Imagem de uma belissima práia de Portugal.">
            </div>
            <div class="carousel-item">
            <img src="{{ asset('assets/img/carousel/img2.jpg') }}" class="d-block w-100" alt="Imagem de uma belissima práia de Portugal.">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </div><!--fim carousel-->
    <div class="div-navbar container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">            
            <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <spam class="navbar-toggler-icon"></spam>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">                
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cotatos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Quem Somes?</a>
                </li>
                </ul>                              
            </div>
            </div>
        </nav>
    </div>
@endsection
@section('content')    
    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-4 text-center fs-3">            
                <div><strong>Pacotes</strong></div>
                <div>Promoções imperdíveis</div>
            </div>
        </div>
    </div>    
    <!-- Swiper -->
    <div class="swiper-container">                
        <div class="swiper-wrapper">
            <!-- Slides 
            <%for(int i = 0; i < resultLugares.size(); i++){%>-->
            <div class="swiper-slide">
                <div class="imgBx">
                    <img src="{{ asset('assets/img/swiper-card/buzios.jpg') }}">
                </div>
                <div class="details">
                    <h6>Pais<br><span>Brasil</span></h6>
                    <h8>R$: 350,00<br><span>por pessoas</span></h8></br>
                    <a href="pacotes?1">Mais detalhes</a>
                    <!-- <button type="button" class="btn btn-link">Link</button> -->
                </div>
            </div>
            <div class="swiper-slide">
                <div class="imgBx">
                    <img src="{{ asset('assets/img/swiper-card/buzios.jpg') }}">
                </div>
                <div class="details">
                    <h6>Pais<br><span>Brasil</span></h6>
                    <h8>R$: 350,00<br><span>por pessoas</span></h8></br>
                    <a href="pacotes?1">Mais detalhes</a>
                    <!-- <button type="button" class="btn btn-link">Link</button> -->
                </div>
            </div>
            <div class="swiper-slide">
                <div class="imgBx">
                    <img src="{{ asset('assets/img/swiper-card/buzios.jpg') }}">
                </div>
                <div class="details">
                    <h6>Pais<br><span>Brasil</span></h6>
                    <h8>R$: 350,00<br><span>por pessoas</span></h8></br>
                    <a href="pacotes?1">Mais detalhes</a>
                    <!-- <button type="button" class="btn btn-link">Link</button> -->
                </div>
            </div>
            <!-- <%}%>
            Slides -->
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <div class="container-fluid mt-5 mb-5">       
        <div class="col-12">
            <div class="row aventure-tour py-3 p-2">
                <div class="col-md-4 text-center">            
                    <div><h4>Turismo de Aventura</h4></div>
                </div>                
                <div class="col-md-2">                                            
                    <img class="nature-img" src="{{ asset('assets/img/bunner/eco.jpg') }}">
                </div>
                <div class="col-md-2">            
                    <img class=" nature-img" src="{{ asset('assets/img/bunner/eco1.jpg') }}">
                </div>
                <div class="col-md-2">            
                    <img class="nature-img" src="{{ asset('assets/img/bunner/eco2.jpg') }}">
                </div>
            </div>
        </div>       
    </div>
    <section><!--section contents-->        
        <div class="container mb-5">
            <div class="row" id="cards-container">
                <div class="col-md-3 mt-5">
                    <div class="card">
                        <img src="{{ asset('assets/img/second-card/lago.jpg') }}" class="card-img-top w-100"/>
                        <div class="card-body">
                            <h4 class="card-title" style="height: 50px;">Amazonas</h4>
                            <h6><i class="fas fa-check-square px-2">Transporte ida e volta</i></h6>
                            <h6><i class="fas fa-check-square px-2">Hospedagem</i></h6>
                            <h6><i class="fas fa-check-square px-2">Café da manhâ</i></h6>
                            <h6><i class="fas fa-check-square px-2">Guia</i></h6>
                            <h6><i class="fas fa-check-square px-2">Sorteio de brindes</i></h6>
                            <div class="d-flex justify-content-between">                                
                                <h4 class="card-text mr-4 text-success" id="card-price">256,90</h4>
                            </div>
                        </div>
                        <button class="btn btn-outline-dark" onClick="buyClick('+i+')">Detalhes<i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                    </div>
                </div>
                <div class="col-md-3 mt-5">
                    <div class="card">
                        <img src="{{ asset('assets/img/second-card/lago.jpg') }}" class="card-img-top w-100"/>
                        <div class="card-body">
                            <h4 class="card-title" style="height: 50px;">Amazonas</h4>
                            <h6><i class="fas fa-check-square px-2">Transporte ida e volta</i></h6>
                            <h6><i class="fas fa-check-square px-2">Hospedagem</i></h6>
                            <h6><i class="fas fa-check-square px-2">Café da manhâ</i></h6>
                            <h6><i class="fas fa-check-square px-2">Guia</i></h6>
                            <h6><i class="fas fa-check-square px-2">Sorteio de brindes</i></h6>
                            <div class="d-flex justify-content-between">                                
                                <h4 class="card-text mr-4 text-success" id="card-price">256,90</h4>
                            </div>
                        </div>
                        <button class="btn btn-outline-dark" onClick="buyClick('+i+')">Detalhes<i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                    </div>
                </div>
                <div class="col-md-3 mt-5">
                    <div class="card">
                        <img src="{{ asset('assets/img/second-card/lago.jpg') }}" class="card-img-top w-100"/>
                        <div class="card-body">
                            <h4 class="card-title" style="height: 50px;">Amazonas</h4>
                            <h6><i class="fas fa-check-square px-2">Transporte ida e volta</i></h6>
                            <h6><i class="fas fa-check-square px-2">Hospedagem</i></h6>
                            <h6><i class="fas fa-check-square px-2">Café da manhâ</i></h6>
                            <h6><i class="fas fa-check-square px-2">Guia</i></h6>
                            <h6><i class="fas fa-check-square px-2">Sorteio de brindes</i></h6>
                            <div class="d-flex justify-content-between">                                
                                <h4 class="card-text mr-4 text-success" id="card-price">256,90</h4>
                            </div>
                        </div>
                        <button class="btn btn-outline-dark" onClick="buyClick('+i+')">Detalhes<i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                    </div>
                </div>
                <div class="col-md-3 mt-5">
                    <div class="card">
                        <img src="{{ asset('assets/img/second-card/lago.jpg') }}" class="card-img-top w-100"/>
                        <div class="card-body">
                            <h4 class="card-title" style="height: 50px;">Amazonas</h4>
                            <h6><i class="fas fa-check-square px-2">Transporte ida e volta</i></h6>
                            <h6><i class="fas fa-check-square px-2">Hospedagem</i></h6>
                            <h6><i class="fas fa-check-square px-2">Café da manhâ</i></h6>
                            <h6><i class="fas fa-check-square px-2">Guia</i></h6>
                            <h6><i class="fas fa-check-square px-2">Sorteio de brindes</i></h6>
                            <div class="d-flex justify-content-between">                                
                                <h4 class="card-text mr-4 text-success" id="card-price">256,90</h4>
                            </div>
                        </div>
                        <button class="btn btn-outline-dark" onClick="buyClick('+i+')">Detalhes<i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                    </div>
                </div>
                <div class="col-md-3 mt-5">
                    <div class="card">
                        <img src="{{ asset('assets/img/second-card/lago.jpg') }}" class="card-img-top w-100"/>
                        <div class="card-body">
                            <h4 class="card-title" style="height: 50px;">Amazonas</h4>
                            <h6><i class="fas fa-check-square px-2">Transporte ida e volta</i></h6>
                            <h6><i class="fas fa-check-square px-2">Hospedagem</i></h6>
                            <h6><i class="fas fa-check-square px-2">Café da manhâ</i></h6>
                            <h6><i class="fas fa-check-square px-2">Guia</i></h6>
                            <h6><i class="fas fa-check-square px-2">Sorteio de brindes</i></h6>
                            <div class="d-flex justify-content-between">                                
                                <h4 class="card-text mr-4 text-success" id="card-price">256,90</h4>
                            </div>
                        </div>
                        <button class="btn btn-outline-dark" onClick="buyClick('+i+')">Detalhes<i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                    </div>
                </div>
                <div class="col-md-3 mt-5">
                    <div class="card">
                        <img src="{{ asset('assets/img/second-card/lago.jpg') }}" class="card-img-top w-100"/>
                        <div class="card-body">
                            <h4 class="card-title" style="height: 50px;">Amazonas</h4>
                            <h6><i class="fas fa-check-square px-2">Transporte ida e volta</i></h6>
                            <h6><i class="fas fa-check-square px-2">Hospedagem</i></h6>
                            <h6><i class="fas fa-check-square px-2">Café da manhâ</i></h6>
                            <h6><i class="fas fa-check-square px-2">Guia</i></h6>
                            <h6><i class="fas fa-check-square px-2">Sorteio de brindes</i></h6>
                            <div class="d-flex justify-content-between">                                
                                <h4 class="card-text mr-4 text-success" id="card-price">256,90</h4>
                            </div>
                        </div>
                        <button class="btn btn-outline-dark" onClick="buyClick('+i+')">Detalhes<i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                    </div>
                </div>
                <div class="col-md-3 mt-5">
                    <div class="card">
                        <img src="{{ asset('assets/img/second-card/lago.jpg') }}" class="card-img-top w-100"/>
                        <div class="card-body">
                            <h4 class="card-title" style="height: 50px;">Amazonas</h4>
                            <h6><i class="fas fa-check-square px-2">Transporte ida e volta</i></h6>
                            <h6><i class="fas fa-check-square px-2">Hospedagem</i></h6>
                            <h6><i class="fas fa-check-square px-2">Café da manhâ</i></h6>
                            <h6><i class="fas fa-check-square px-2">Guia</i></h6>
                            <h6><i class="fas fa-check-square px-2">Sorteio de brindes</i></h6>
                            <div class="d-flex justify-content-between">                                
                                <h4 class="card-text mr-4 text-success" id="card-price">256,90</h4>
                            </div>
                        </div>
                        <button class="btn btn-outline-dark" onClick="buyClick('+i+')">Detalhes<i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                    </div>
                </div>
                <div class="col-md-3 mt-5">
                    <div class="card">
                        <img src="{{ asset('assets/img/second-card/lago.jpg') }}" class="card-img-top w-100"/>
                        <div class="card-body">
                            <h4 class="card-title" style="height: 50px;">Amazonas</h4>
                            <h6><i class="fas fa-check-square px-2">Transporte ida e volta</i></h6>
                            <h6><i class="fas fa-check-square px-2">Hospedagem</i></h6>
                            <h6><i class="fas fa-check-square px-2">Café da manhâ</i></h6>
                            <h6><i class="fas fa-check-square px-2">Guia</i></h6>
                            <h6><i class="fas fa-check-square px-2">Sorteio de brindes</i></h6>
                            <div class="d-flex justify-content-between">                                
                                <h4 class="card-text mr-4 text-success" id="card-price">256,90</h4>
                            </div>
                        </div>
                        <button class="btn btn-outline-dark" onClick="buyClick('+i+')">Detalhes<i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div><!--row-->
        </div><!--container-->
        <div class="container mb-3">
          <div class="row justify-content-center" id="row-navbar">
          <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                      <li class="page-item">
                        <a class="page-link" id="previous" aria-label="Anterior">
                          <span aria-hidden="true">&laquo;</span>
                        </a>
                      </li>
                        <li><a class="page-link" id="numeration"></a></li>                          
                      <li class="page-item">
                        <a class="page-link" id="next" aria-label="Próximo">
                          <span aria-hidden="true">&raquo;</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
          </div><!--row-->
        </div><!--container-->        
    </section><!--section contents--> 
    <div class="container-fluid mt-5 mb-5">
        <div class="feedback">
            <div class="row justify-content-center py-5">
                <div class="col-4 text-center">            
                    <div><h4>Avaliação dos Clientes</h4></div>
                </div>
            </div>
            <div class="row justify-content-center py-5">                
                <div class="col-md-3">
                    <div class="card" style="width: 15rem;">
                        <div class="card-body">
                            <h5 class="card-title">Cliente</h5>
                            <p>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            </p>
                            <p class="card-text">Opinião do Cliente</p>
                        </div>
                    </div>                
                </div>
                <div class="col-md-3">            
                    <div class="card" style="width: 15rem;">
                        <div class="card-body">
                            <h5 class="card-title">Cliente</h5>
                            <p>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            </p>
                            <p class="card-text">Opinião do Cliente</p>
                        </div>
                    </div>                
                </div>
                <div class="col-md-3">            
                    <div class="card" style="width: 15rem;">
                        <div class="card-body">
                            <h5 class="card-title">Cliente</h5>
                            <p>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                <i class="fa fa-star text-warning" aria-hidden="true"></i>
                            </p>
                            <p class="card-text">Opinião do Cliente</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     
@endsection    
@section('scripts')     
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <!--função Swiper-->
    <script>
        var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows : true,
        },
        pagination: {
            el: '.swiper-pagination',
        },
        });
    </script><!--fim da função Swiper-->
@endsection

